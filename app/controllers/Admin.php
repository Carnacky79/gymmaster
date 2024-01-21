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
        if (isset($_POST['id_iscritto'])) {
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
        }
        $this->mostraNuovaScheda(['iscritto' => $iscritto, 'scheda' => $scheda_nuova]);
    }

    public function mostraNuovaScheda($data = [])
    {
        $esercizio = new Esercizio();
        $esercizi = $esercizio->esercizi_categorie();
        $scheda = new Scheda();
        $scheda = $scheda->where(['id' => $data['scheda']]);
        $categorie = new Categoria();
        $categorie = $categorie->findAll();
        $this->view('esercizioscheda', ['iscritto' => $data['iscritto'], 'scheda' => $scheda[0], 'esercizi' => $esercizi, 'categorie' => $categorie]);
    }

    public function associaSchedaEsercizi()
    {
        $id_scheda = $_POST['id_scheda'];
        $esercizi = $_POST['esercizi'];
        $attiva = $_POST['attiva'];
        $iscritto = new Iscritto();
        $iscritto = $iscritto->where(['id' => $_POST['id_iscritto']]);

        $scheda = new Scheda();
        $schede = $scheda->schede_iscritto($iscritto[0]->id);

        if ($attiva == 1) {
            $scheda->update($id_scheda, ['attiva' => 1]);

            foreach ($schede as $s) {


                if ($s->id != $id_scheda) {
                    $scheda->update($s->id, ['attiva' => 0]);
                }
                //
            }
        }

        foreach ($esercizi as $es) {
            foreach ($_POST as $key => $value) {
                if (substr($key, strpos($key, "_") + 1) == $es)
                    $data[substr($key, 0, strpos($key, "_"))] = $value == '' ? null : $value;
            }
            $data['id_esercizio'] = $es;
            $data['id_scheda'] = $id_scheda;
            $associazione = new Associazione();
            $associazione->insert($data);
        }

        $schede = $scheda->schede_iscritto($iscritto[0]->id);
        $this->view('creaScheda', ['iscritto' => $iscritto, 'schede' => $schede]);
    }

    public function dettaglioscheda()
    {
        $id_scheda = $_POST['id_scheda'];
        $iscritto = new Iscritto();
        $iscritto = $iscritto->where(['id' => $_POST['id_iscritto']]);

        $scheda = new Scheda();
        $scheda = $scheda->where(['id' => $id_scheda]);

        $esercizo = new Associazione();
        $esercizi = $esercizo->esercizi_scheda_utente($id_scheda);

        $this->view('dettaglioscheda', ['iscritto' => $iscritto, 'scheda' => $scheda[0], 'esercizi' => $esercizi]);
    }
}
