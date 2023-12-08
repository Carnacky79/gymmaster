<?php

class Login
{
    use Controller;
    use Session;

    public function index()
    {
        $data = [
            'email' => $_REQUEST['email'],
            'password' => $_REQUEST['password'],
        ];
        $user = new User();
        $loggedUser = $user->first($data);
        if ($loggedUser) {
            $this->saveUser($loggedUser);
            $this->redirect('admin');
        } else {
            $this->view('home');
        }

    }
}
