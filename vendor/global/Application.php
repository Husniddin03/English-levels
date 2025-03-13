<?php

namespace vendor\global;

session_start();

class Application
{
    public function run()
    {
        try {
            $path = Roud::roud($_SERVER['REQUEST_URI']);
            $url = explode('/', $path);

            if (count($url) < 2) {
                throw new \Exception('Invalid URL format');
            }

            $className = 'controller\\' . $url[0];
            $functionName = $url[1];

            if (!class_exists($className)) {
                throw new \Exception("Controller class '$className' not found");
            }

            $controller = new $className();

            if (!method_exists($controller, $functionName)) {
                throw new \Exception("Method '$functionName' not found in controller '$className'");
            }

            $controller->{$functionName}();
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
