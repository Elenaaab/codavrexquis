<?php

namespace app\Models;

use app\utils\Database;
use PDO;

class Verbe extends CoreModel
{

 
    public static function find() {
        $pdo = Database::getPDO();
        $verbe = $pdo->query("SELECT word FROM `verbe` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $verbe[0];

     }

     public function insert() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `verbe` (
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


