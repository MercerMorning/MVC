<?php
namespace App\Controller;

class Index
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
}