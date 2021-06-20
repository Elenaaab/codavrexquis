<?php

namespace app\Models;

use app\utils\Database;
use PDO;

class Adjectif extends CoreModel
{


     public static function find() {
        $pdo = Database::getPDO();
        $adjectif = $pdo->query("SELECT word FROM `adjectif` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $adjectif[0];

     }

     public function insert() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `adjectif` (
                word
            )
            VALUES (
                :word
            )
        ";
    
        $query = $pdo->prepare($sql);
    
        $query->bindValue(':word', $this->word, PDO::PARAM_STR);
     }
    
}


