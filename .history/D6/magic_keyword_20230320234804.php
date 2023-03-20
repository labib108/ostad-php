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
    function setName($name){
        $this->name = $name;
    }
    function setAge($age){
        $this->age = $age;
    }
    function setlass($class){
        $this->class = $class;
    }
}

$student = new student();
$student->setName('John');
$student->setAge(20);
$student->setlass('12');
echo $student->getName().PHP_EOL;
echo $student->getAge().PHP_EOL;
echo $student->getClass().;
?>