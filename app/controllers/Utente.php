<?php

class Utente
{
    use Controller;
    use Session;
    public function index(){
        $this->getLoggedUser()[0];
        $esercizi = $iscritto->getEsercizi($iscritto->id)
        $this->view('iscritto');
    }
}
