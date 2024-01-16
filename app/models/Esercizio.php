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
    
}
