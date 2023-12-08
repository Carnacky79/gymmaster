<?php

class Home
{
    use Controller;
    use Session;

    public function index()
    {
        if ($this->isLogged()) {
            $this->redirect('admin');
        }
        $this->view('home');
    }
}
