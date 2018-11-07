<?php
use Bitrix\Main\Loader;

if (!Loader::includeModule('admin.settings')) return;

return array(
    array(
        'parent_menu' => 'global_menu_content',
        'sort' => 300,
        'icon' => 'fileman_sticker_icon',
        'page_icon' => 'fileman_sticker_icon',
        'text' => 'Настройки сайта',
        'url' => '/bitrix/admin/admin_putevochka_settings.php',
        'more_url' => array(
            'bitrix/test2'
        )
    )
);