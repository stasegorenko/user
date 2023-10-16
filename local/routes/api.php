<?php

CModule::IncludeModule('userinfo');

return function (\Bitrix\Main\Routing\RoutingConfigurator $routes) {
    $routes->get('/rest/lastuser/', [\Userinfo\Controller\User::class, 'getAction']);
};