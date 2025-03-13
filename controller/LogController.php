<?php

namespace controller;

use model\Users;
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
            Users::validate($this->post('name'), 'name');
            Users::validate($this->post('username'), 'username');
            Users::validate($this->post('email'), 'email');
            Users::validate($this->post('password'), 'password');
            if (Users::$validates) {
                $user = Users::create(
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
            die('Error');
            $user = Users::find(['id' => $this->user('id')]);

            if ($user) {
                foreach ($this->post() as $key => $value) {
                    Users::validate($value, $key);
                }
                if (Users::$validates) {
                    Users::update($this->post());
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
            $user = Users::find(['email' => $email]);
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
