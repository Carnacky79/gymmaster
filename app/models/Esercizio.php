<?php

class Esercizio
{
    use Model;

    protected $table = 'esercizi';

    protected $allowedColumns = [
    ];

    public function esercizi_categorie()
    {
        $query = "select esercizi.id, esercizi.nome, esercizi.id_categoria, categorieesercizi.nome as cat_nome from esercizi inner join categorieesercizi on esercizi.id_categoria = categorieesercizi.id;";
        return $this->query($query);
    }

    public function esercizi_scheda($id_scheda)
    {
        $query = "select esercizi.id, esercizi.nome, esercizi.id_categoria, categorieesercizi.nome as cat_nome from esercizi inner join categorieesercizi on esercizi.id_categoria = categorieesercizi.id inner join schedeesercizi on esercizi.id = schedeesercizi.id_esercizio ";
        $query .= "where schedeesercizi.id_scheda = :id_scheda";
        return $this->query($query, ['id_scheda' => $id_scheda]);
    }
}
