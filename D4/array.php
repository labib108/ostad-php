<?php

    $students = array(
        "labib",
        "bidyut",
        "fahmi",
        "donial",
        "wasif"
    );
    for($i = 0; $i < count($students); $i++)
    {
        echo $students[$i] . PHP_EOL;
    }
    echo "==============================" . PHP_EOL;

    $student = array_pop($students);
    echo $student . PHP_EOL;
    echo "==============================" . PHP_EOL;

    $student2 = array_shift($students);
    echo $student2 . PHP_EOL;
    echo "==============================" . PHP_EOL;

    $students [] = "sami";
    array_push($students,"sumon");

    array_unshift($students,"siddiq");
    for($i = 0; $i < count($students); $i++)
    {
        echo $students[$i] . PHP_EOL;
    }
    echo "==============================" . PHP_EOL;

?>