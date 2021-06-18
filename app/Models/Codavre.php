<?php

namespace app\Models;
use app\utils\Database; 
use PDO;

class Codavre extends CoreModel {

        // Methodes héritées du coremodel

        public function find() {}
        public function insert(){}
    


// En guise de test, on utilise une méthode simple pour récupérer 5 mots : 

    public static function findWords()
    {
        $sql = "SELECT `word` FROM `codavre` LIMIT 5";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $words = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'app\Models\Codavre');  // =======> Attention au chemin en argument avec les namespace !!
        return $words;
    }
}


//Donc ici, il va falloir intégrer dans la méthode findwords la procédure pour extraire tous les mots : 


// Il va aussi falloir construire une méthode pour envoyer les mots dans la BDD (voir form.php) : 

    // Faire une fonction insert qui sera appelée plusieurs fois depuis le controlleur selon les types de mots