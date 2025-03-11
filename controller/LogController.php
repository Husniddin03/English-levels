<?php

namespace controller;

use model\User;
use vendor\controller\Controller;
use vendor\session\Session;

class LogController extends Controller
{

    public function getuser()
    {
        if (!$this->user('id')) {
            return $this->redirect('main/index');
        }
        return $this->view('register/user');
    }

    public function signup()
    {
        if ($this->post()) {
            User::validate($this->post('name'), 'name');
            User::validate($this->post('username'), 'username');
            User::validate($this->post('email'), 'email');
            User::validate($this->post('password'), 'password');
            if (User::$validates) {
                $user = User::create(
                    [
                        "name" => $this->post('name'),
                        "username" => $this->post('username'),
                        "email" => $this->post('email'),
                        "password" => password_hash($this->post('password'), PASSWORD_DEFAULT)
                    ]
                );

                Session::add('user_id', $user);

                return $this->redirect('main/home');
            }
            else{
                echo "Error";
                die();
            }
        }
        return $this->view('register/register');
    }

    public function update()
    {
        if ($this->post()) {

            $user = User::find(['id' => $this->user('id')]);

            if ($user) {
                foreach ($this->post() as $key => $value) {
                    User::validate($value, $key);
                }
                if (User::$validates) {
                    User::update($this->post());
                    return $this->redirect('log/getuser');
                }
            }
            return $this->redirect('log/getuser');
        }

        return $this->redirect('log/getuser');
    }

    public function img(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
        
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                echo json_encode(['success' => true, 'file' => $uploadFile]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Yuklashda xatolik.']);
            }
        }
    }

    public function login()
    {
        if ($this->post()) {
            $email = $this->post('email');
            $password = $this->post('password');
            $user = User::find(['email' => $email]);
            if ($user && password_verify($password, $user['password'])) {

                Session::add('user_id', $user['id']);
                return $this->redirect('main/home');
            }
        }
        return $this->view('register/register');
    }

    public function logout()
    {
        Session::remove('user_id');
        return $this->view('register/register');
    }
}
