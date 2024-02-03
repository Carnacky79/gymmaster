<?php

trait Session
{
    public function saveUser(stdClass $user, string $role)
    {
        $_SESSION['user'] = $user;
        $_SESSION['logged'] = true;
        $_SESSION['ruolo'] = $role;
        $log = new Log();
        $data = [
            'utente' => $user->id,
            'data' => date('Y-m-d H:i:s'),
        ];
        //$log->insert($data);
    }

    public function isLogged()
    {
        return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
    }

    public function logout()
    {
        session_destroy();
    }

    public function getLoggedUser()
    {
        $logged = [
            $_SESSION['user'],
            $_SESSION['ruolo']
        ];
        return $logged;
    }
}
