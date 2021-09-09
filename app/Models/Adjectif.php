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
    
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':word', $this->word, PDO::PARAM_STR);
        $ok = @$pdoStatement->execute();
        return $ok;
     }


     public static function findTroll() {
        $pdo = Database::getPDO();
        $adjectif = $pdo->query("SELECT word FROM `adjectif2` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $adjectif[0];

     }

     public function insertTroll() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `adjectif2` (
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


