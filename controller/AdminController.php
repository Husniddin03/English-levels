<?php

namespace controller;

use model\Users;
use vendor\controller\Controller;
use vendor\model\Validator;
use vendor\session\Session;

class AdminController extends Controller
{
    public function index()
    {
        if (empty(Session::get('admin_id'))) {
            return $this->redirect('admin/login');
        }
        $data = Users::data('users');
        
        $this->view('admin/index', ['data' => $data]);
    }
    public function login()
    {
        if ($this->post()) {
            $email = $this->post('email');
            $username = $this->post('username');
            $password = $this->post('password');
            $user = Users::find(['email' => $email]);
            if ($user && password_verify($password, $user['password']) && $user['username'] == $username && $user['role'] == "admin") {
                Session::add('admin_id', $user['id']);
                Session::add('user_id', $user['id']);
                return $this->redirect('admin/index');
            }
        }
        $this->view('admin/login');
    }
    public function logout(){
        Session::remove('admin_id');
        return $this->view('admin/login');
    }

    public function update()
    {
        if (empty(Session::get('admin_id'))) {
            return $this->redirect('admin/login');
        }
        if ($this->post()) {
            $id = $this->post('id');
            foreach ($this->post() as $key => $value) {
                Validator::$key($value);
            }
            $data = [
                'username' => $this->post('username'),
                'email' => $this->post('email'),
                'password' => password_hash($this->post('password'), PASSWORD_DEFAULT),
                'role' => $this->post('role'),
            ];
            Users::update($id, $data);
            return $this->redirect('admin/index');
        }
        $id = $this->get('id');
        $data = Users::find($id);
        $this->view('admin/update', ['data' => $data]);
    }
}
