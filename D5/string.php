<?php

    // strlen => strlen(string)
    // substr => substr(string, 0, length)
    // str_replace => str_replace(find, replace, string)
    // trim => trim(string)
    // strtoupper => uppercase all characters in a string
    // strtolower => lowercase all characters in a string
    // ucfirst => upper first character in a string
    // ucwords => uppercase the first character in each word in a string
    // strrev => reverse a string
    // str_pad => pad a string with a certain number of characters
    // str_repeat => repeat a string a certain number of times
    // str_split => split a string into an array
    // explode => explode a string into an array
    // implode => implode an array into a string
    // addslashes => add slashes to a string
    // stripslashes => remove slashes from a string
    // htmlentities => convert html entities to characters
    // html_entity_decode => decode html entities
    // strip_tags => remove html tags from a string 


    $str = "Hello World";
    $arr = array("Hello", "labib", "how", "are", "you");
    echo strlen($str);
    echo substr($str,0,5).PHP_EOL;
    echo substr($str,6,5);
    echo str_replace("World","labib",$str).PHP_EOL;
    echo trim($str).PHP_EOL;
    echo strtoupper($str).PHP_EOL;
    echo strtolower($str).PHP_EOL;
    echo strrev($str).PHP_EOL;
    echo str_repeat($str,5).PHP_EOL;
    print_r(explode(" ",$str)).PHP_EOL;
    print_r(implode(" ",$arr)).PHP_EOL;
    






?>