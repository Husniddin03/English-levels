<?php

namespace vendor\global;

class Roud
{
    private static $data = [];

    public static function get($path, $url)
    {
        self::$data[$path] = $url;
    }

    public static function post($path, $url)
    {
        self::$data[$path] = $url;
    }

    public static function roud($url)
    {
        include __DIR__ . '/../../roud/Roud.php';

        if (strpos($url, '?') !== false) {
            $url = explode('?', $url)[0];
        }
        return array_key_exists($url, self::$data) ? self::$data[$url]: die("Invalid URL");
    }
}
