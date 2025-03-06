<?php

namespace controller;

use vendor\controller\Controller;

class CompController extends Controller
{
    public function footer()
    {
        return $this->view('companent/footer');
    }
    public function header()
    {
        return $this->view('companent/header');
    }

    public function footernaw()
    {
        return $this->view('companent/footernaw');
    }
}
