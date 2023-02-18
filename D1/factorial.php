<?php

/*
0! = 1
1! = 1
2! = 2
3! = 6
4! = 24
5! = 120
6! = 720
7! = 5040
8! = 40320
9! = 362880
using recursive function to get Factorial of a number
*/
    
    function factorial($n)
    {
        if($n == 0)
            return 1;
        else
            return ($n * factorial($n - 1));
    }
    for($i = 0; $i < 10; $i++)
    {
        echo "Factorial of " . $i . " is " . factorial($i) . "\n";
    }
?>