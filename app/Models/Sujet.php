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
    
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':word', $this->word, PDO::PARAM_STR);
        $ok = @$pdoStatement->execute();
        return $ok;
     }

     public static function findTroll() {
        $pdo = Database::getPDO();
        $sujet = $pdo->query("SELECT word FROM `sujet2` ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_NUM);
        return $sujet[0];

     }

     public function insertTroll() {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `sujet2` (
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


