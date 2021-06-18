<?php

namespace app\Models;

abstract class CoreModel {

    protected $id;
    protected $word;
    protected $type;

    // Methode du coremodel

    protected abstract function find();
    protected abstract function insert();


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

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}