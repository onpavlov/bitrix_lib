<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('admin.settings',
    [
        'AdminSettings\Config' => 'lib/Config.php',
    ]
);
