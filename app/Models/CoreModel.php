<?php

namespace app\Models;

use \app\utils\Database;
use \PDO;

class CoreModel {

    protected $id;
    protected $word;
    protected $type;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of word
     */ 
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
}