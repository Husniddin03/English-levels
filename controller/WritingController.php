<?php

namespace controller;

use vendor\controller\Controller;

class WritingController extends Controller{
    public function index(){
        return $this->view('writing/index');
    }
}