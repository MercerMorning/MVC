<?php
namespace Base;

class Request //Работает с тем что пришло от пользователя
{
    protected $_controllerName = "";
    protected $_actionName = "";
    public function __construct()
    {
        $parts = explode("/", $_SERVER["REQUEST_URI"]);
        $this->_controllerName = $parts[1] ?? "";
        $this->_actionName = $parts[2] ?? "";
    }

    /**
     * @return mixed|string
     */
    public function getControllerName()
    {
        return $this->_controllerName;
    }

    /**
     * @param mixed|string $controllerName
     */
    public function setControllerName($controllerName): void
    {
        $this->_controllerName = $controllerName;
    }

    /**
     * @return mixed|string
     */
    public function getActionName()
    {
        return $this->_actionName;
    }

    /**
     * @param mixed|string $actionName
     */
    public function setActionName($actionName): void
    {
        $this->_actionName = $actionName;
    }
}