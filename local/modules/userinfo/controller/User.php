<?php
namespace Userinfo\Controller;


use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;

class User extends Controller
{
    private \Userinfo\User $user;

    public function getDefaultPreFilters(): array
    { 
        return [
            new ActionFilter\Authentication(),
            new ActionFilter\HttpMethod(
                [ActionFilter\HttpMethod::METHOD_GET, ActionFilter\HttpMethod::METHOD_POST]
            ), 
        ];
    }

    protected function prepareParams(): bool
    {
        $this->user = new \Userinfo\User();
        return parent::prepareParams();
    }

    public function getAction(): array
    {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        
        switch ($request->getPost('param')) {
            case 'login':
                $select = ['LOGIN']; 
                break;
            case 'name':
                $select = ['NAME']; 
                break;            
            default: 
                break;
        }
        return $this->user->getLastUserInfo($select);
    }
}