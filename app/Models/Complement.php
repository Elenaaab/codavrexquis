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
    
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':word', $this->word, PDO::PARAM_STR);
        $ok = @$pdoStatement->execute();
        return $ok;
     }

     public static function findTroll() {
        $pdo = Database::getPDO();
        $complement = $pdo->query("SELECT word FROM `complement2` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $complement[0];

     }

     public function insertTroll() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `complement2` (
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


