<?php

    $var = "Hello World";
    var_dump($var);

    function divede($a,$b)
    {
        if($b == 0)
        {
            error_log("Divide by zero", 0);
        }
        else
        {
            return $a / $b;
        }
    }
    echo divede(10,0);

    echo "---------------------" . PHP_EOL;

    function fun1()
    {
        fun2();
    }
    function fun2()
    {
        $backtrack = debug_backtrace();
        print_r($backtrack);
    }
    fun1();
?>