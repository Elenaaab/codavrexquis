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
    
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':word', $this->word, PDO::PARAM_STR);
        $ok = @$pdoStatement->execute();
        return $ok;
     }

     public static function findTroll() {
        $pdo = Database::getPDO();
        $verbe = $pdo->query("SELECT word FROM `verbe2` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $verbe[0];

     }

     public function insertTroll() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `verbe2` (
                word
            )
            VALUES (
                :word
            )
        ";
    
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':word', $this->word, PDO::PARAM_STR);
        $ok = @$pdoStatement->execute();
        return $ok;
     }
    
}


