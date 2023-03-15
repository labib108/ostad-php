<?php

    abstract class Myclass{
        final function doSomething()
        {
            echo "final keyword is used to make a class as abstract and cannot be instantiated";
        }
        
    }
    class shareClass extends Myclass{
        final function doSomething()
        {
            echo "final keyword is used to make a class as abstract and cannot be instantiated";
        }
    }

    $a = new shareClass();
    $a->doSomething();

?>