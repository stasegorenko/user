<?php

namespace Userinfo;

class User
{
    public function getLastUserInfo(array $select): array
    {
		$result = \Bitrix\Main\UserTable::getList(array(
		    'select' => $select, 
		    'order' => array('LAST_LOGIN'=>'DESC'),
		    'limit' => 1

		)); 

        if ($row = $result->Fetch()) {
            $data = $row;
        }

        return $data ?? [];
    }
}