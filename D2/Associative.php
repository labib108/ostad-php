<?php

    $rashid_hall = array(
        "labib" => "112",
        "sumon" => "113",
        "bidyut" => "112",
        "wasif" => "117",
        "rabby" => "no room"
    );

    foreach($rashid_hall as $key => $value)
    {
        echo "Room number of {$key} is {$value} \n";
    }

    echo "=====================================\n";

    $border = array(
        array("name" => "labib", "dept" => "cse", "room" => "112", "hall" => "rashid hall"),
        array("name" => "sumon", "dept" => "cse", "room" => "113", "hall" => "rashid hall"),
        array("name" => "bidyut", "dept" => "cse", "room" => "112", "hall" => "rashid hall"),   
        array("name" => "wasif", "dept" => "cse", "room" => "117", "hall" => "rashid hall"),
        array("name" => "rabby", "dept" => "cse", "room" => "no room", "hall" => "rashid hall"),
        array("name" => "ovishek", "dept" => "eee", "room" => "113", "hall" => "rashid hall"),
        array("name" => "fatin", "dept" => "eee", "room" => "112", "hall" => "rashid hall"),
        array("name" => "sakib", "dept" => "me", "room" => "120", "hall" => "rashid hall")
    );
    print_r($border);
?>