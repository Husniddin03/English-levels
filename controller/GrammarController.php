<?php

namespace controller;

use vendor\controller\Controller;

class GrammarController extends Controller
{
    public function index()
    {
        return $this->view('grammar/index');
    }

    public function tenses()
    {
        return $this->view('grammar/tenses');
    }

    public function modal()
    {
        return $this->view('grammar/modal');
    }

    public function conditional()
    {
        return $this->view('grammar/conditional');
    }
}
