<?php

class Admin
{
    use Controller;

    public function index()
    {
        $iscritto = new Iscritto();
        $esercizi = new Esercizio();
        $data = [
            'id_palestra' => $_SESSION['user']->id,
        ];
        $iscritti = $iscritto->where($data);
        $numeroEsercizi = $esercizi->count();
        $this->view('admin', ['iscritti' => $iscritti, 'esercizi' => $numeroEsercizi]);
    }

    //DISPLAY ALL USERS
    public function users()
    {
        $iscritto = new Iscritto();
        $iscritti = $iscritto->iscritti_palestra();
        $this->view('users', ['iscritti' => $iscritti]);
    }

    public function esercizi()
    {
        $esercizio = new Esercizio();
        $esercizi = $esercizio->esercizi_categorie();
        $this->view('esercizi', ['esercizi' => $esercizi]);
    }
}
