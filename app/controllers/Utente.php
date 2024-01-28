<?php

class Utente
{
    use Controller;
    use Session;

    public function index()
    {
        $this->view('user_dashboard');
    }
}