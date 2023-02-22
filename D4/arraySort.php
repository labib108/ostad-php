<?php

    $number = array(
        "physics" => array(75,15,90),
        "chemistry" => array(30,85,90),
        "biology" => array(85,50,95),
        "science" => array(75,85,65),
    );

    foreach ($number as $subject)
    {
        foreach ($subject as $key)
        {
            echo $key . " ";
        }
        echo PHP_EOL;
    }
?>