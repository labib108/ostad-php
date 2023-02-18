<?php
    $friend = array("bidyut", "robayet", "wasif", "sami", "sumon", "rabby", "domial");
    $room_mate = array("partho", "kazi", "utsho", "bidyut", "mursalin");
 
    foreach($friend as $name)
    {
        echo $name . "\n";
    }

    echo "==========================================================\n";

    foreach($room_mate as $name)
    {
        echo $name . "\n";
    }

    echo "==========================================================\n";

    echo "number of friend " . count($friend) . "\n";
    echo "number of roomamte " .count($room_mate) . "\n";
?>