<?php

namespace app\Models;

use app\utils\Database;
use PDO;

class Sujet extends CoreModel
{

    
    public static function find() {
        $pdo = Database::getPDO();
        $sujet = $pdo->query("SELECT word FROM `sujet` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $sujet[0];

     }

     public function insert() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `sujet` (
                word
            )
            VALUES (
                :word
            )
        ";
    
        $query = $pdo->prepare($sql);
    
        $query->bindValue(':word', $this->word, PDO::PARAM_STR);
     }

    // Sur Troll : 



    
}

