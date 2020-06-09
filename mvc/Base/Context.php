<?php
namespace Base;

class Context
{
    private static $_instance;

    private $_request;
    private $_dispatcher;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function i()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}