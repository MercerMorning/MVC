<?php
namespace App\Controller;

use Base\Controller;

class User extends Controller
{
    public function indexAction()
    {
        $this->_render = false;
        $this->_jsonData = ["name" => "Dima", "id" => 3];
        $this->json();
        echo 'hello';
    }

    public function loginAction()
    {
        echo "user.login";
    }
}