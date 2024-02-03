<?php

class Associazione
{
    use Model;

    protected $table = 'esercizi_scheda';

    protected $allowedColumns = [
    ];

    public function esercizi_scheda_utente($id_scheda)
    {
        $query = "SELECT DISTINCT
    esercizi.nome,
    esercizi_scheda.note,
    categorieesercizi.nome AS nome_cat
FROM
    esercizi
         JOIN
         esercizi_scheda on esercizi.id = esercizi_scheda.id_esercizio
     join
    categorieesercizi ON esercizi.id_categoria = categorieesercizi.id
    where
    esercizi_scheda.id_scheda = $id_scheda;";
        return $this->query($query);
    }

    public function isAssociated($idEsercizio)
    {
        return $this->first(['id_esercizio' => $idEsercizio]);
    }


}
