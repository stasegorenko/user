<?php

$module_folder = \Bitrix\Main\Application::getDocumentRoot() . '/local/modules/userinfo';

\Bitrix\Main\Loader::registerNamespace('Userinfo\Controller', $module_folder . '/controller');