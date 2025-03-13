<?php

namespace controller;

use model\Users;
use vendor\controller\Controller;
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
}
