<?php
namespace App\Controller;
use App\Model\modelUser;
use Base\Controller;

class Index extends Controller
{
    public $view;

    public function indexAction()
    {
        $this->view->modelUser = new \App\Model\modelUser();
    }

    public function mainAction()
    {
        echo 'main';
    }

    public function preAction()
    {
        $this->view->userModel = new modelUser();
    }
}