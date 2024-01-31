<?php

class Home
{
    use Controller;
    use Session;

    public function index()
    {
        if ($this->isLogged()) {
            if ($this->isAdmin())
                $this->redirect('admin');
            else
                $this->redirect('iscritto');
        }
        $this->view('home');
    }

    private function isAdmin()
    {
        if ($this->getLoggedUser()[1] == 'admin')
            return true;
        else
            return false;
    }
}
