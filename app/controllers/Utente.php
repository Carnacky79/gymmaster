<?php

class Utente
{
    use Controller;
    use Session;
    public function index(){
        $iscritto = new Iscritto();
        $esercizi = $iscritto->getEsercizi($_SESSION['user']->id);
        $this->view('iscritto', ['esercizi' => $esercizi]);
    }
}
