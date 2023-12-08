<?php

trait Session
{
    public function saveUser(stdClass $user)
    {
        $_SESSION['user'] = $user;
        $_SESSION['logged'] = true;
    }

    public function isLogged()
    {
        return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
    }

    public function logout()
    {
        session_destroy();
    }

}
