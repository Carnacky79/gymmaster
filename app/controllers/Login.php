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

        $type = $_REQUEST['admin'] == 1 ? 'admin' : 'iscritto';

        if($type == 'admin') {
            $this->loginAdmin($data);
        } else {
            $this->loginIscritto($data);
        }



    }

    private function loginAdmin($data): void
    {
        $user = new User();
        $loggedUser = $user->first($data);
        if ($loggedUser) {
            $this->saveUser($loggedUser);
            $this->redirect('admin');
        } else {
            $this->view('home');
        }
    }

    private function loginIscritto($data): void
    {
        $iscritto = new Iscritto();
        $loggedUser = $iscritto->first($data);
        if ($loggedUser) {
            $this->saveUser($loggedUser);
            $this->redirect('iscritto');
        } else {
            $this->view('home');
        }
    }

    public function logout(): void
    {
        $this->destroySession();
        $this->redirect('home');
    }

    private function destroySession(): void
    {
        session_destroy();
    }
}
