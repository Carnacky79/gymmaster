<?php

class User
{
    use Controller;

    public function index()
    {
        $this->view('admin');
    }
}
