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

    public function addUser()
    {
        $this->view('addUser');
    }

    public function persistUser()
    {
        $iscritto = new Iscritto();
        $data = [
            'nome' => $_POST['nome'],
            'cognome' => $_POST['cognome'],
            'email' => $_POST['email'],
            'data_nascita' => $_POST['data_nascita'],
            'telefono' => $_POST['telefono'],
            'id_palestra' => $_SESSION['user']->id,
        ];
        $iscritto->insert($data);
        $this->redirect('admin/users');
    }

    public function creaScheda()
    {
        $schede = new Scheda();
        $iscritto = new Iscritto();
        $data = [
            'id' => $_GET['id'],
        ];
        $iscritto = $iscritto->where($data);
        $schede_iscritto = $schede->schede_iscritto($_GET['id']);
        $this->view('creaScheda', ['iscritto' => $iscritto, 'schede' => $schede_iscritto]);
    }

    public function nuovascheda()
    {
        $scheda = new Scheda();
        $iscritto = new Iscritto();
        $data = [
            'id' => $_POST['id_iscritto'],
        ];
        $iscritto = $iscritto->where($data);
        $data = [
            'id_utente' => $_POST['id_iscritto'],
            'attiva' => 0,
        ];
        $scheda_nuova = $scheda->insert($data);
        $this->dettaglioScheda(['iscritto' => $iscritto, 'scheda' => $scheda_nuova]);
    }

    public function dettaglioScheda($data = []){
        $this->view('dettaglioscheda', ['iscritto' => $data['iscritto'], 'scheda' => $data['scheda']]);
    }
}
