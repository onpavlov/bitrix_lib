<?php

use Bitrix\Main\ModuleManager;
use Bitrix\Main\Loader;

class admin_settings extends CModule
{
    var $MODULE_ID = 'admin.settings';

    function __construct()
    {
        $arModuleVersion = array();

        include(__DIR__ . '/version.php');

        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_NAME = 'Admin Settings';
        $this->MODULE_DESCRIPTION = 'Admin Settings interface';
        $this->PARTNER_NAME = 'putevochka';
        $this->PARTNER_URI = 'http://putevochka.com';
    }

    public function DoInstall()
    {
        global $DB;

        $DB->RunSQLBatch(__DIR__ . '/install.sql');

        CopyDirFiles(__DIR__ . '/files/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/', true, true);
        
        ModuleManager::registerModule($this->MODULE_ID);
        Loader::includeModule($this->MODULE_ID);
    }

    public function DoUninstall()
    {
        global $DB;
        
        Loader::includeModule($this->MODULE_ID);

        $DB->RunSQLBatch(__DIR__ . '/uninstall.sql');
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}