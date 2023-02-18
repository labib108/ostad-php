<?php

    $border = array(
        array(
            array("name" => "labib", "dept" => "cse", "room" => "112", "hall" => "rashid hall"),
            array("name" => "sumon", "dept" => "cse", "room" => "113", "hall" => "rashid hall"),
            array("name" => "bidyut", "dept" => "cse", "room" => "112", "hall" => "rashid hall"),   
            array("name" => "wasif", "dept" => "cse", "room" => "117", "hall" => "rashid hall"),
            array("name" => "rabby", "dept" => "cse", "room" => "no room", "hall" => "rashid hall")
        ),
        array(
            array("name" => "ovishek", "dept" => "eee", "room" => "114", "hall" => "rashid hall"),
            array("name" => "fatin", "dept" => "eee", "room" => "114", "hall" => "rashid hall"),
            array("name" => "mehedi", "dept" => "eee", "room" => "114", "hall" => "rashid hall")
        ),
        array(
            array("name" => "utsho", "dept" => "urp", "room" => "112", "hall" => "rashid hall"),
            array("name" => "sakib sani", "dept" => "urp", "room" => "no room", "hall" => "rashid hall"),
            array("name" => "mursalin ", "dept" => "urp", "room" => "112", "hall" => "rashid hall")
        ),
        array(
            array("name" => "sovon", "dept" => "me", "room" => "114", "hall" => "rashid hall"),
            array("name" => "imran", "dept" => "me", "room" => "117", "hall" => "rashid hall"),
            array("name" => "hiron", "dept" => "me", "room" => "no room", "hall" => "rashid hall")
        )
        
    );
    foreach($border as $dept)
    {
        foreach($dept as $name)
        {
            foreach($name as $key => $value)
            {
                echo $key . " : " . $value . "\n";
            }
            echo "----------------------" . "\n";
        }
        echo "**********************************************************" . "\n";
        echo "**********************************************************" . "\n";
    }

    print_r($border);

?>