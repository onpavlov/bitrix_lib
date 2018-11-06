<?php

use Bitrix\Iblock\SectionTable;
use PL\Helpers\IblockHelper;
use PL\System\Seo;

class CCustomSeo extends CBitrixComponent
{
    const IBLOCK_CITIES_SEO_CODE = 'cities_seo_templates';
    const IBLOCK_URL_SEO_CODE = 'url_seo_metatags';
    const DEFAULT_TEMPLATE_CODE = 'default';

    private $matches;

    public function onPrepareComponentParams($arParams)
    {
        foreach (['iblock'] as $module) {
            if (!\Bitrix\Main\Loader::includeModule($module)) {
                die('Couldn\'t include module ' . $module);
            }
        }

        return $arParams;
    }

    public function executeComponent()
    {
        $city = GeoLocation::getCity();
        $cityCode = empty($city['UF_SHORT_CODE']) ? 'msk' : $city['UF_SHORT_CODE'];
        $url = parse_url($this->request->getRequestUri());
        $url = $url['path'] ?: '/';

        if (!($seo = $this->getSeo($cityCode, $url))) {
            $seo = self::getSeoTemplates($city, $url);
        }

        if (!empty($seo)) {
            Seo::setH1($seo['H1']);
            Seo::setTitle($seo['TITLE']);
            Seo::setDescription($seo['DESCRIPTION']);
            Seo::setKeywords($seo['KEYWORDS']);
        }
    }

    /**
     * @param $cityCode
     * @param $url
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    private function getSeo($cityCode, $url)
    {
        if (empty($url)) return [];

        $elements = (new CIBlockElement())->GetList(
            [],
            [
                'IBLOCK_ID' => IblockHelper::getIdByCode(self::IBLOCK_URL_SEO_CODE),
                'ACTIVE' => 'Y',
                'NAME' => $url,
                'SECTION_CODE' => $cityCode
            ],
            false,
            false,
            ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_TEXT', 'IBLOCK_SECTION_ID', 'PROPERTY_TITLE', 'PROPERTY_DESCRIPTION', 'PROPERTY_KEYWORDS']
        );

        if ($element = $elements->Fetch()) {
            return [
                'H1' => $element['PROPERTY_TAG_H_VALUE'],
                'TITLE' => $element['PROPERTY_TITLE_VALUE'],
                'DESCRIPTION' => $element['PROPERTY_DESCRIPTION_VALUE'],
                'KEYWORDS' => $element['PROPERTY_KEYWORDS_VALUE'],
            ];
        }

        return [];
    }

    /**
     * @param $city
     * @param $url
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    private function getSeoTemplates($city, $url)
    {
        $url = str_replace('/' . $city['UF_SHORT_CODE'], '', $url);
        $pageType = $this->getPageType($url);
        $type = IblockHelper::getPropertyOption(self::IBLOCK_CITIES_SEO_CODE, 'META_TEMPLATE_CODE', $pageType);
        $this->setVariables($pageType, $city);

        $elements = (new CIBlockElement())->GetList(
            [],
            [
                'IBLOCK_ID' => IblockHelper::getIdByCode(self::IBLOCK_CITIES_SEO_CODE),
                'ACTIVE' => 'Y',
                'SECTION_CODE' => [$city['UF_SHORT_CODE'], self::DEFAULT_TEMPLATE_CODE],
                'PROPERTY_META_TEMPLATE_CODE_VALUE' => $type['VALUE']
            ],
            false,
            false,
            [
                'ID',
                'IBLOCK_ID',
                'NAME',
                'DETAIL_TEXT',
                'IBLOCK_SECTION_ID',
                'PROPERTY_META_TITLE',
                'PROPERTY_META_DESCRIPTION',
                'PROPERTY_META_KEYWORDS',
                'PROPERTY_TAG_H',
                'PROPERTY_SKIP_FIRST_PAGE',
                'PROPERTY_ADD_FILTER',
                'PROPERTY_META_TEMPLATE_CODE'
            ]
        );

        if ($element = $elements->Fetch()) {
            if ($elements->SelectedRowsCount() > 1 && $element['SECTION_CODE'] === self::DEFAULT_TEMPLATE_CODE) {
                $element = $elements->Fetch();
            }

            return [
                'H1' => Seo::getInstance()->replaceVariables($element['PROPERTY_TAG_H_VALUE']),
                'TITLE' => Seo::getInstance()->replaceVariables($element['PROPERTY_META_TITLE_VALUE']),
                'DESCRIPTION' => Seo::getInstance()->replaceVariables($element['PROPERTY_META_DESCRIPTION_VALUE']),
                'KEYWORDS' => Seo::getInstance()->replaceVariables($element['PROPERTY_META_KEYWORDS_VALUE'])
            ];
        }

        return [];
    }

    private function getPageType($url, $default = '')
    {
        $result = '';

        foreach($this->arParams['types'] as $type => $urlTpl) {
            if ((strpos($urlTpl, '#') !== false) && preg_match_all($urlTpl, $url, $this->matches)) {
                $result = $type;
            } elseif (empty($result) && $url === $urlTpl) {
                $result = $type;
            }
        }

        return $result ?: $default;
    }

    /**
     * @param $type
     * @param $city
     *
     * {city.name}
     * {city.name.rp}
     * {city.name.pp}
     * {section.name}
     */
    private function setVariables($type, $city)
    {
        switch ($type) {
            case 'CATEGORY':
                $section = SectionTable::getRow([
                    'filter' => ['IBLOCK_ID' => Medicaments::BLOCK_ID, 'CODE' => reset($this->matches[1])],
                    'select' => ['ID', 'NAME']
                ]);
                $data = [
                    'city.name.rp' => $city['UF_NAME_RP'],
                    'city.name.pp' => $city['UF_NAME_PP'],
                    'section.name' => $section['NAME']
                ];
                break;

            case 'SUBCATEGORY':
                $section = SectionTable::getRow([
                    'filter' => ['IBLOCK_ID' => Medicaments::BLOCK_ID, 'CODE' => reset($this->matches[2])],
                    'select' => ['ID', 'NAME']
                ]);
                $data = [
                    'city.name.rp' => $city['UF_NAME_RP'],
                    'city.name.pp' => $city['UF_NAME_PP'],
                    'subsection.name' => $section['NAME']
                ];
                break;
            default:
                $data = [
                    'city.name.rp' => $city['UF_NAME_RP'],
                    'city.name.pp' => $city['UF_NAME_PP']
                ];
        }

        $data['city.name'] = $city['NAME'];
        Seo::getInstance()->setVariables($data);
    }
}