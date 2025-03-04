<?php

namespace vendor\session;

class Session
{
    public static function add($name, $value)
    {
        session_start();
        $_SESSION[$name] = $value;
        return isset($_SESSION[$name]);
    }

    public static function remove($name)
    {
        session_start();
        unset($_SESSION[$name]);
        return isset($_SESSION[$name]);
    }

    public static function get($name)
    {
        session_start();
        return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
    }
}
