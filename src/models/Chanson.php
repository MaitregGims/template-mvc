<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class Chanson extends Database
{
    private $id_chanson;
    private $titre;
    private $date;
    private $id_chanteur;
    private $id_categorie;


    public function getData()
    {
        return [
            'id' => $this->id_chanson,
            'titre' => $this->titre,
            'date' => $this->date,
            'id_chanteur' => $this->id_chanteur,
            'id_categorie' => $this->id_categorie,
        ];
    }
}