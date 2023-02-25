<?php
//Write a function that takes a string as input and returns a new string that consists of the first and last two letters of the input string.

function string($str){
    $length = strlen($str);
    if($length < 4)
        return $str;
    else
    {
        $string = substr($str,0,2). substr($str,-2,2);
        return $string;
    }
}
echo string("bangladesh is my motherland");

?>