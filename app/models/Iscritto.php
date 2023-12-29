<?php

class Iscritto
{
    use Model;

    protected $table = 'utenti';

    protected $allowedColumns = [
    ];

    public function iscritti_palestra()
    {
        $query = "select utenti.id, utenti.nome, utenti.cognome, utenti.email, utenti.data_nascita, utenti.telefono, utenti.id_palestra, palestre.nome as palestra_nome from utenti inner join palestre on utenti.id_palestra = palestre.id ";
        $query .= "where utenti.id_palestra = :id_palestra";
        return $this->query($query, ['id_palestra' => $_SESSION['user']->id]);
    }
}
