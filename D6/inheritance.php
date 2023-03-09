<?php

    class parentClass{
        protected $name;
        function __construct($name){
            $this->name = $name;
            $this->sayHi();
        }

        function sayHi(){
            echo "Hi {$this->name} \n";
        }

        function sayHello(){
            echo "Hello {$this->name} \n";
        }
    }

    class childClass extends parentClass{
        function sayHi(){
            parent::sayHello();
            echo "Hello {$this->name} \n";
        }
    }

    $baby = new childClass("Labib");

?>