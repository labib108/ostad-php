<?php

 //Write a function that takes a string as input and returns the string with all vowels replaced by the character "x". Use the str_replace() and strtolower() functions to process the string.


function vowel_replace($str)
{
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $string = strtolower($str);
    $lenght = strlen($string);
    for($i = 0; $i < $lenght; $i++)
    {
        if(in_array($string[$i], $vowels))
        {
            $string = str_replace($string[$i], 'x', $string);
        }
        else
            continue;
    }
    return $string;
}

echo vowel_replace("bangladesh is my motherland");

?>