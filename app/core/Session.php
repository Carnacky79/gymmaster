<?php

trait Session
{
    public function saveUser(stdClass $user){
        $_SESSION['email'] = $user->email;
        $_SESSION['logged'] = true;
    }

}
