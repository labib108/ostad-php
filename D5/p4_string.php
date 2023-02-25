<?php

//Write a function that takes a string as input and returns the number of times the word "PHP" appears in the string.

function count_php($str)
{
    $count = 0;
    $string = strtoupper($str);
    $array = explode(" ", $string);
    for($i = 0; $i < count($array); $i++ )
    {
        if($array[$i] == "PHP")
        {
            $count++;
        }
    }
    return $count;
}
    $string = "We love PHP . We are learning PHP";
    echo "The number of times PHP appears in the string is: " . count_php($string).PHP_EOL;

?>