<?php
//Write a function that takes a string as input and returns the number of vowels in the string. Use the strlen(), strtolower(), and substr() functions to process the string.

function countVowel($str)
{
    $vowels = array("a", "e", "i", "o", "u");
    $string = strtolower($str);
    $count = 0;
    $length = strlen($string);
    for($i = 0; $i < $length; $i++)
    {
        if(in_array($string[$i], $vowels))
        {
            $count++;
        }
        else
        {
            continue;
        }
    }
    return $count;
}

echo countVowel("Bangladesh is my mother land");

?>