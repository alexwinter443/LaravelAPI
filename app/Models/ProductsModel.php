<?php

namespace App\Models;

use JsonSerializable;

class ProductsModel implements JsonSerializable {
    
    // variables
    private $name;
    private $description;
    private $id;
    

    // Class Constructor
    public function __construct($name, $description){
        
        $this->username = $name;
        $this->password = $description;
        
    }
    
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
   
    
    public function jsonSerialize()
    {
            
        return $this;
    }
    
    
    
}