<?php

namespace vendor\session;

class Session {
    public static function session($name, $value = null){
        session_start();
        $_SESSION[$name] = $value;
    }
}