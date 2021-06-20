<?php

namespace app\Models;

use app\utils\Database;
use PDO;

class Complement extends CoreModel
{


    public static function find() {
        $pdo = Database::getPDO();
        $complement = $pdo->query("SELECT word FROM `complement` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $complement[0];

     }

     public function insert() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `complement` (
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


