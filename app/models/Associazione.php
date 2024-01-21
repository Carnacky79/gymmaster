<?php

class Associazione
{
    use Model;

    protected $table = 'esercizi_scheda';

    protected $allowedColumns = [
    ];

    public function esercizi_scheda_utente($id_scheda, $id_utente)
    {
        $query = "select esercizi_scheda.id, esercizi_scheda.id_esercizio, esercizi_scheda.id_scheda, esercizi_scheda.ripetizioni, esercizi_scheda.serie, esercizi_scheda.recupero, esercizi_scheda.carico, esercizi_scheda.note, esercizi.nome as nome_esercizio, categorieesercizi.nome as nome_categoria from esercizi_scheda inner join esercizi on esercizi_scheda.id_esercizio = esercizi.id inner join categorieesercizi on esercizi.id_categoria = categorieesercizi.id where esercizi_scheda.id_scheda = $id_scheda and esercizi_scheda.id_utente = $id_utente;";
        return $this->query($query);
    }


}
