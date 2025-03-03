<?php
namespace vendor\global;
session_start();

class Application
{
    public function run()
    {
        $path = Roud::roud($_SERVER['REQUEST_URI']);
        $url = explode('/', $path);
        $className = 'controller\\' . $url[0];
        $functionName = $url[1];

        $controller = new $className();

        $controller->{$functionName}();
    }
}
