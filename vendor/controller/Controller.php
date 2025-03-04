<?php

namespace vendor\controller;

session_start();

use Vendor\Model\Database;
use vendor\session\Session;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        include "view/{$view}.php";
    }

    public function redirect($view)
    {
        header('Location: /' . $view);
        exit();
    }

    public function post($item = null)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
            $post = [];
            foreach ($_POST as $key => $value) {
                $post[$key] = trim($value);
            }
            return $item === null ? $post : $post[$item];
        } else {
            return false;
        }
    }
    public function get($name)
    {
        $query_string = explode('?', $_SERVER['REQUEST_URI'])[1] ?? '';
        parse_str($query_string, $params);
        return $params[$name] ?? null;
    }

    public function user($item)
    {

        $pdo = Database::connect();

        $query = "SELECT * FROM User WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => Session::get('user_id')]);

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $user[$item] ?? false;
    }
}
