<?php

namespace app\Models;

abstract class CoreModel {

    protected $id;
    protected $word;

    // For regular game : 

    protected abstract static function find();
    protected abstract function insert();

    // For troll game : 
    protected abstract static function findTroll();
    protected abstract function insertTroll();

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
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of word
     *
     * @return  self
     */ 
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

}