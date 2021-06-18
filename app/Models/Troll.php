<?php

namespace app\Models;
use app\utils\Database; 
use PDO;

class Troll extends CoreModel {


            // Methodes héritées du coremodel

            public function find() {}
            public function insert(){}


            // On commence par récupérer 5 mots au hasard, il va ensuite falloir les afficher dans la view : 

    public function findTrollWords()
    {
        $sql = "SELECT `word` FROM `troll`LIMIT 5";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $words = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\Models\Troll');  // =======> Attention au chemin en argument avec les namespace !!
        return $words;
    }

}