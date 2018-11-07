<?php

namespace AdminSettings;

use Bitrix\Main\Config\Option;

class Config
{
    const TYPE_CITY = 'city';
    const TYPE_INFRA = 'infra';
    const TYPE_FOR_WHOM = 'forwhom';
    const TYPE_DIFFERENT = 'different';
    const TYPE_PROFILES = 'profiles';
    const TYPE_PROGS = 'progs';
    const TYPE_PRICE = 'price';
    const TYPE_TYPE = 'type';

    private $showCityConfig;
    private $showInfraConfig;
    private $showForwhomConfig;
    private $showDifferentConfig;
    private $showProfilesConfig;
    private $showProgsConfig;
    private $filterInfraSelected;
    private $filterForWhomSelected;
    private $filterDifferentSelected;
    private $showPriceConfig;

    public function __construct()
    {
        $this->showCityConfig = (array) json_decode(Option::get('admin.settings', 'filter_city_show', 'N'));
        $this->showTypeConfig = (array) json_decode(Option::get('admin.settings', 'filter_type_show', 'N'));
        $this->showInfraConfig = (array) json_decode(Option::get('admin.settings', 'filter_infra_show', 'N'));
        $this->showForwhomConfig = (array) json_decode(Option::get('admin.settings', 'filter_for_whom_show', 'N'));
        $this->showDifferentConfig = (array) json_decode(Option::get('admin.settings', 'filter_different_show', 'N'));
        $this->showProfilesConfig = (array) json_decode(Option::get('admin.settings', 'filter_profiles_show', 'N'));
        $this->showProgsConfig = (array) json_decode(Option::get('admin.settings', 'filter_progs_show', 'N'));
        $this->showPriceConfig = (array) json_decode(Option::get('admin.settings', 'filter_price_show', 'N'));
        $this->filterInfraSelected = (array) json_decode(Option::get('admin.settings', 'filter_infra_props', []));
        $this->filterForWhomSelected = (array) json_decode(Option::get('admin.settings', 'filter_for_whom_props', []));
        $this->filterDifferentSelected = (array) json_decode(Option::get('admin.settings', 'filter_different_props', []));
        $this->filterFields = (array) json_decode(Option::get('admin.settings', 'filter_fields', []));
        $this->bxFields = (array) json_decode(Option::get('admin.settings', 'bx_fields', []));
    }

    /**
     * @param array $types
     * @return array
     */
    public function getInfraItems($types = [])
    {
        $result = [];

        if (empty($types)) {
            $result = call_user_func_array('array_merge', $this->filterInfraSelected);
        }

        foreach ($types as $type) {
            if ($this->showInfraConfig[$type['XML_ID']] === 'Y') {
                $result = array_merge($this->filterInfraSelected[$type['XML_ID']], $result);
            }
        }

        return array_unique($result);
    }

    /**
     * @param array $types
     * @return array
     */
    public function getForWhomItems($types = [])
    {
        $result = [];

        if (empty($types)) {
            $result = call_user_func_array('array_merge', $this->filterForWhomSelected);
        }

        foreach ($types as $type) {
            if ($this->showForwhomConfig[$type['XML_ID']] === 'Y') {
                $result = array_merge($this->filterForWhomSelected[$type['XML_ID']], $result);
            }
        }

        return array_unique($result);
    }

    /**
     * @param array $types
     * @return array
     */
    public function getDifferentItems($types = [])
    {
        $result = [];

        if (empty($types)) {
            $result = call_user_func_array('array_merge', $this->filterDifferentSelected);
        }

        foreach ($types as $type) {
            if ($this->showDifferentConfig[$type['XML_ID']] === 'Y') {
                $result = array_merge($this->filterDifferentSelected[$type['XML_ID']], $result);
            }
        }

        return array_unique($result);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showCityTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_CITY);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showInfraTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_INFRA);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showForwhomTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_FOR_WHOM);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showDifferentTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_DIFFERENT);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showProfilesTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_PROFILES);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showProgsTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_PROGS);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showPriceTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_PRICE);
    }

    /**
     * @param array $types
     * @return bool
     */
    public function showTypeTab($types = [])
    {
        return $this->isConfigEnabled($types, self::TYPE_TYPE);
    }

    /**
     * @param $config
     * @return bool
     */
    public function isConfigEnabled($types, $configType)
    {
        switch ($configType) {
            case self::TYPE_CITY:
                $config = $this->showCityConfig;
                break;

            case self::TYPE_INFRA:
                $config = $this->showInfraConfig;
                break;

            case self::TYPE_FOR_WHOM:
                $config = $this->showForwhomConfig;
                break;

            case self::TYPE_DIFFERENT:
                $config = $this->showDifferentConfig;
                break;

            case self::TYPE_PROFILES:
                $config = $this->showProfilesConfig;
                break;

            case self::TYPE_PROGS:
                $config = $this->showProgsConfig;
                break;

            case self::TYPE_PRICE:
                $config = $this->showPriceConfig;
                break;

            case self::TYPE_TYPE:
                $config = $this->showTypeConfig;
                break;
        }

        if (empty($types) && !empty($config)) return true;

        if (!empty($types) && !empty($config)) {
            foreach ($types as $item) {
                if ($config[$item['XML_ID']] === 'Y') {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getObjectFields()
    {
        return array_combine($this->filterFields, $this->bxFields);
    }
}