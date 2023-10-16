<?php

class userinfo extends CModule
{
    var $MODULE_ID = 'userinfo';
    var $MODULE_NAME = 'логин пользователя, который последний авторизовался в системе';
    var $MODULE_DESCRIPTION = "Модуль для теста";
    var $MODULE_VERSION = "1.0";
    var $MODULE_VERSION_DATE = "2023-10-16 12:00:00"; 

    public function DoInstall()
    {
        \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
    }

    public function DoUninstall()
    {
        \Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}
