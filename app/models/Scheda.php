<?php

class Scheda
{
    use Model;

    protected $table = 'schede';

    protected $allowedColumns = [
    ];

    public function schede_iscritto($id_iscritto)
    {
        $query = "select schede.id, schede.data, schede.id_utente, schede.attiva from schede inner join utenti on schede.id_utente = utenti.id ";
        $query .= "where schede.id_utente = :id_utente";
        return $this->query($query, ['id_utente' => $id_iscritto,]);
    }
}
