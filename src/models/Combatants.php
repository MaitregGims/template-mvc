<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class Combatants extends Database
{
    private $id;
    private $nom;
    private $force;
    private $sante;
    private $niveau;
    private $id_style;

    public function getData()
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'force' => $this->force,
            'sante' => $this->sante,
            'niveau' => $this->niveau,
            'id_style' => $this->id_style
        ];
    }
}