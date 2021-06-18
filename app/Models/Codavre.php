<?php

namespace app\Models;

use app\utils\Database;
use PDO;

class Codavre extends CoreModel
{

    // Methodes héritées du coremodel

    // En guise de test, on utilise une méthode simple pour récupérer 5 mots : 

    public function find()
    {
        $sql = "SELECT `word` FROM `codavre` LIMIT 5";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $words = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\Models\Codavre');  // =======> Attention au chemin en argument avec les namespace !!
        return $words;
    }

    public function insert()
    {
    }
}


//Donc ici, il va falloir intégrer dans la méthode findwords la procédure pour extraire tous les mots : 
