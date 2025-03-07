<?php

namespace controller;

use vendor\controller\Controller;

class SpeakingController extends Controller{
    public function index(){
        return $this->view('speaking/index');
    }
}