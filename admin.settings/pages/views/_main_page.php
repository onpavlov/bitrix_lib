<? $tabControl->BeginNextTab();
use Local\Catalog\Objects\Object;
use Local\Helpers\IblockHelper;

$types = IblockHelper::getPropertyOptions(Object::IBLOCK_CODE, 'OBJECT_TYPE');
$yesNoProps = IblockHelper::getProperties(Object::IBLOCK_CODE, '', '', 'YesNo');
$infrastructures = (new \Local\Helpers\QueryHelper())->getList(\Local\Catalog\Objects\Infrastructure::class, [
    'IBLOCK_ID' => \Local\Catalog\Objects\Infrastructure::getIblockId(), 'ACTIVE' => 'Y'
]);
?>
<style>
    .news-selector label {
        cursor: pointer;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .news-selector .news-list {
        max-height: 150px;
        overflow-y: auto;
    }
</style>

<? foreach ($types as $type): ?>
    <tr class="heading" id="tr_PREVIEW_TEXT_LABEL">
        <td colspan="2">Настройки вкладок для типа "<?= $type['VALUE'] ?>"</td>
    </tr>
    <tr>
        <td colspan="2">
            <table border="0" cellspacing="0" cellpadding="0" class="internal" width="100%">
                <tbody>
                <tr class="heading">
                    <td width="150">Наименование вкладки</td>
                    <td width="80">Отображать</td>
                    <td>Фильтры для вывода</td>
                </tr>
                <tr>
                    <td>Город</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_city_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterCityShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                </tr>
                <tr>
                    <td>Тип объекта</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_type_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterTypeShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                </tr>
                <tr>
                    <td>Инфраструктура</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_infra_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterInfraShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                    <td>
                        <select name="filter_infra_props[<?= $type['XML_ID'] ?>][]" multiple style="width:100%">
                            <? foreach ($infrastructures as $infrastructure): ?>
                                <option value="<?= $infrastructure->code ?>"
                                    <?= in_array($infrastructure->code, $filterInfraSelected[$type['XML_ID']]) ? 'selected' : '' ?>>
                                    <?= $infrastructure->name ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Для кого</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_for_whom_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterForWhomShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                    <td>
                        <select name="filter_for_whom_props[<?= $type['XML_ID'] ?>][]" multiple style="width:100%">
                            <? foreach ($yesNoProps as $property): ?>
                                <option value="<?= $property['CODE'] ?>"
                                    <?= in_array($property['CODE'], $filterForWhomSelected[$type['XML_ID']]) ? 'selected' : '' ?>>
                                    <?= $property['NAME'] ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Разное</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_different_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterDifferentShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                    <td>
                        <select name="filter_different_props[<?= $type['XML_ID'] ?>][]" multiple style="width:100%">
                            <? foreach ($yesNoProps as $property): ?>
                                <option value="<?= $property['CODE'] ?>"
                                    <?= in_array($property['CODE'], $filterDifferentSelected[$type['XML_ID']]) ? 'selected' : '' ?>>
                                    <?= $property['NAME'] ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Профили лечения</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_profiles_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterProfilesShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                </tr>
                <tr>
                    <td>Программы лечения</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_progs_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterProgsShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                </tr>
                <tr>
                    <td>Цена</td>
                    <td style="text-align: center">
                        <input type="checkbox" name="filter_price_show[<?= $type['XML_ID'] ?>]"
                               value="Y" <?= ($filterPriceShow[$type['XML_ID']] == 'Y') ? 'checked' : '' ?> />
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
<? endforeach; ?>