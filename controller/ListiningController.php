<?php

namespace controller;

use vendor\controller\Controller;

class ListiningController extends Controller{
    public function index(){
        return $this->view('listining/index');
    }
}