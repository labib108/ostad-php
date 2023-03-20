<?php
class student{
    private $name;
    private $age;
    private $class;
    
    public function __construct($name='', $age='', $class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function getClass(){
        return $this->name;
    }
    function setName(){
        $this->name = $name;
    }
    public function setAge(){
        $this->age = $age;
    }
    public function setlass(){
        $this->class = $class;
    }
}