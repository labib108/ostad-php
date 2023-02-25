<?php

//Write a function that takes a string as input and returns the string with all words in reverse order. Use the explode(), array_reverse(), and implode() functions to process the string.

function reverse_string($str)
{
    $array = explode(" ", $str);
    $arrar = array_reverse($array);
    $string = implode(" ", $arrar);
    return $string;
}

echo reverse_string("bangladesh is my motherland");

?>