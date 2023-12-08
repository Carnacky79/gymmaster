<?php

class Admin
{
    use Controller;

    public function index()
    {
        $this->view('admin');
    }

    //DISPLAY ALL USERS
    public function users()
    {
        $user = new User();
        $users = $user->findAll();
        $this->view('users', ['users' => $users]);
    }
}
