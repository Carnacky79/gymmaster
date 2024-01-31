<?php

class Iscritto
{
    use Model;

    protected $table = 'utenti';

    protected $allowedColumns = [
    ];

    public function iscritti_palestra()
    {
        $query = "select DATE_FORMAT(utenti.data_iscrizione, '%d/%m/%Y') as data_iscrizione, utenti.id, utenti.nome, utenti.cognome, utenti.email, utenti.data_nascita, utenti.telefono, utenti.id_palestra, palestre.nome as palestra_nome from utenti inner join palestre on utenti.id_palestra = palestre.id ";
        $query .= "where utenti.id_palestra = :id_palestra";
        return $this->query($query, ['id_palestra' => $_SESSION['user']->id]);
    }

    public function getEsercizi($idUtente)
    {
        $id = (integer)$idUtente;
        $queryScheda = "select schede.id from schede ";
        $queryScheda .= " where id_utente = :id_utente AND attiva = 1";

        $idScheda = $this->query($queryScheda,['id_utente' => $id])[0]->id;
        $queryEsercizi =
    }
}
