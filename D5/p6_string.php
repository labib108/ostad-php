<?php

//write a function that takes two strings as input and returns a new string that is the result of alternating the characters of the two input strings.

function alternate_strings($string1, $string2) {
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $maxlen = max($len1, $len2);
    $result = '';
    for ($i = 0; $i < $maxlen; $i++) {
        if ($i < $len1) {
            $result .= $string1[$i];
        }
        if ($i < $len2) {
            $result .= $string2[$i];
        }
    }
    return $result;
}
echo alternate_strings("bangladesh","sylhet");
echo PHP_EOL."===========================".PHP_EOL;
//Write a function that takes a string as input and returns the string with all characters replaced by the ASCII value of the character.
function ascii_string($string) {
    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $result .= ord($string[$i]) . ' ';
    }
    return trim($result);
}

echo ascii_string("Labib");

?>