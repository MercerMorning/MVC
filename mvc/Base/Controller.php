<?php
namespace Base;

class Controller
{

    /**
     * @var View
     */
    public $view;

    /** @var array  */
    protected $_jsonData = [];

    /** @var bool */
    protected $_render = true;

    /**
     * @param bool $render
     */
    public function needRender(): bool
    {
        return $this->_render;
    }


    public function preAction()
    {

    }

    public function json()
    {
        header("Content-type: application/json");
        echo json_encode($this->_jsonData);
    }
}