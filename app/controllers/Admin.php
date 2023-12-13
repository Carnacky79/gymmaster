<?php

class Admin
{
    use Controller;

    public function index()
    {
        $iscritto = new Iscritto();
        $data = [
            'id_palestra' => $_SESSION['user']->id,
        ];
        $iscritti = $iscritto->where($data);
        $this->view('admin', ['iscritti' => $iscritti]);
    }

    //DISPLAY ALL USERS
    public function users()
    {
        $iscritto = new Iscritto();
        $iscritti = $iscritto->findAll();
        $this->view('users', ['iscritti' => $iscritti]);
    }
}
