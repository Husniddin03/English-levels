<?php

namespace controller;

use model\User;
use vendor\controller\Controller;
use vendor\session\Session;

class LogController extends Controller
{
    public function signup()
    {
        if ($this->post()) {
            User::validate($this->post('name'), 'name');
            User::validate($this->post('email'), 'email');
            User::validate($this->post('password'), 'password');
            if (User::$validates) {
                $user = User::create(
                    [
                        "name" => $this->post('name'),
                        "email" => $this->post('email'),
                        "password" => password_hash($this->post('password'), PASSWORD_DEFAULT)
                    ]
                );

                // Session::session('user_id', $user);

                $_SESSION['user_id'] = $user;

                return $this->view('main/index');
            }
        }
        return $this->view('register/register');
    }

    public function login()
    {
        if ($this->post()) {
            $email = $this->post('email');
            $password = $this->post('password');
            $user = User::find(['email' => $email]);
            if ($user && password_verify($password, $user['password'])) {

                // Session::session('user_id', $user['id']);
                $_SESSION['user_id'] = $user['id'];

                return $this->view('main/index');
            }
        }
        return $this->view('register/register');
    }

    // public function logout(){
    //     unset($_SESSION['user_id']);
    //     return $this->view('register/register');
    // }
}
