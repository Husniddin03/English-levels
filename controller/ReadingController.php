<?php

namespace controller;

use vendor\controller\Controller;

class ReadingController extends Controller{
    public function index(){
        return $this->view('reading/index');
    }
}