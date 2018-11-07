<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin.php');
define('SETTINGS_MODULE_ID', 'admin.settings');

use Bitrix\Main\Context;
use Bitrix\Main\Config\Option;

// получим права доступа текущего пользователя на модуль
$POST_RIGHT = $APPLICATION->GetGroupRight('admin.settings');
// если нет прав - отправим к форме авторизации с сообщением об ошибке
if ($POST_RIGHT == 'D') {
    $APPLICATION->AuthForm('У вас нет прав доступа к модулю Admin Settings');
}

$tabs = [
    ['DIV' => 'main_page', 'TAB' => 'Настройки фильтра', 'ICON' => 'main_user_edit', 'TITLE' => 'Настройки фильтра'],
    ['DIV' => 'common_page', 'TAB' => 'Общие настройки', 'ICON' => 'main_user_edit', 'TITLE' => 'Общие настройки'],
    ['DIV' => 'fields', 'TAB' => 'Поля', 'ICON' => 'main_user_edit', 'TITLE' => 'Поля'],
];
$tabControl = new CAdminTabControl('tabControl', $tabs);

$id = intval($id); // идентификатор редактируемой записи
$message = null; // сообщение об ошибке
$bVarsFromForm = false;

$request = Context::getCurrent()->getRequest();

$filterCityShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_city_show', 'N'));
$filterTypeShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_type_show', 'N'));
$filterInfraShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_infra_show', 'N'));
$filterForWhomShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_for_whom_show', 'N'));
$filterDifferentShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_different_show', 'N'));
$filterProfilesShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_profiles_show', 'N'));
$filterProgsShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_progs_show', 'N'));
$filterPriceShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_price_show', 'N'));
$filterInfraSelected = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_infra_props', []));
$filterForWhomSelected = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_for_whom_props', []));
$filterDifferentSelected = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_different_props', []));

$detailNewYearShow = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'detail_newyear_show', 'N'));

$filterFields = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'filter_fields', []));
$bxFields = (array) json_decode(Option::get(SETTINGS_MODULE_ID, 'bx_fields', []));

if ($REQUEST_METHOD == "POST" // проверка метода вызова страницы
    && ($save != "" || $apply != "") // проверка нажатия кнопок "Сохранить" и "Применить"
    && $POST_RIGHT == "W" // проверка наличия прав на запись для модуля
    && check_bitrix_sessid() // проверка идентификатора сессии
) {
    $filterCityShow = $request['filter_city_show'];
    $filterTypeShow = $request['filter_type_show'];
    $filterInfraShow = $request['filter_infra_show'];
    $filterForWhomShow = $request['filter_for_whom_show'];
    $filterDifferentShow = $request['filter_different_show'];
    $filterProfilesShow = $request['filter_profiles_show'];
    $filterProgsShow = $request['filter_progs_show'];
    $filterPriceShow = $request['filter_price_show'];
    $filterInfraSelected = $request['filter_infra_props'];
    $filterForWhomSelected = $request['filter_for_whom_props'];
    $filterDifferentSelected = $request['filter_different_props'];

    $detailNewYearShow = $request['detail_newyear_show'];

    $filterFields = array_filter($request['filter_fields']);
    $bxFields = array_filter($request['bx_fields']);

    Option::set(SETTINGS_MODULE_ID, 'filter_city_show', json_encode($filterCityShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_type_show', json_encode($filterTypeShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_infra_show', json_encode($filterInfraShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_for_whom_show', json_encode($filterForWhomShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_different_show', json_encode($filterDifferentShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_profiles_show', json_encode($filterProfilesShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_progs_show', json_encode($filterProgsShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_price_show', json_encode($filterPriceShow));
    Option::set(SETTINGS_MODULE_ID, 'filter_infra_props', json_encode($filterInfraSelected));
    Option::set(SETTINGS_MODULE_ID, 'filter_for_whom_props', json_encode($filterForWhomSelected));
    Option::set(SETTINGS_MODULE_ID, 'filter_different_props', json_encode($filterDifferentSelected));

    Option::set(SETTINGS_MODULE_ID, 'detail_newyear_show', json_encode($detailNewYearShow));

    Option::set(SETTINGS_MODULE_ID, 'filter_fields', json_encode($filterFields));
    Option::set(SETTINGS_MODULE_ID, 'bx_fields', json_encode($bxFields));
}
?>
    <form method="POST" Action="<? echo $APPLICATION->GetCurPage() ?>" ENCTYPE="multipart/form-data" name="post_form">
        <?= bitrix_sessid_post(); // проверка идентификатора сессии ?>
        <input type="hidden" name="lang" value="<?= LANG ?>">
        <? $tabControl->Begin();
        foreach ($tabs as $tab) {
            if (file_exists(__DIR__ . '/views/_' . $tab['DIV'] . '.php')) {
                require_once __DIR__ . '/views/_' . $tab['DIV'] . '.php';
            } else {
                $message = new CAdminMessage('Не найден файл views/_' . $tab['DIV'] . '.php');
            }
        }

        $tabControl->Buttons(
            [
                'disabled' => ($POST_RIGHT < 'W'),
                'back_url' => 'rubric_admin.php?lang=' . LANG,
            ]
        );

        if ($message) {
            echo $message->Show();
        }

        $tabControl->End();
        ?>
    </form>
<?php require($_SERVER['DOCUMENT_ROOT'] . BX_ROOT . '/modules/main/include/epilog_admin.php'); ?>