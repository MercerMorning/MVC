<?php
namespace Base;

class Dispatcher
{
    const DEFAULT_CONTROLLER = "index";
    const DEFAULT_ACTION = "index";

    private $_controllerName = "";
    private $_actionToken = "";

    public function dispatch()
    {
        $request = Context::i()->getRequest();

        $controllerName = $request->getControllerName();
        $actionName = $request->getActionName();


        if (!$controllerName || !$this->check($controllerName)) {
            $this->_controllerName = self::DEFAULT_CONTROLLER;
        } else {
            $this->_controllerName = ucfirst(strtolower($controllerName));
        }

        if (!$actionName || !$this->check($actionName)) {
            $this->_actionToken = self::DEFAULT_ACTION;
        } else {
            $this->_actionToken = ucfirst(strtolower($actionName));
        }
    }

    private function check(string $key)
    {
        return preg_match("/[a-zA-Z0-9]+/", $key);
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->_controllerName;
    }

    /**
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName): void
    {
        $this->_controllerName = $controllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->_actionToken . "Action";
    }

    /**
     * @param string $actionName
     */
    public function setActionToken(string $actionName): void
    {
        $this->_actionToken = $actionName;
    }

    public function getActionToken()
    {
        return $this->_actionToken;
    }
}