<?php

    function something()
    {
        static $x = 0;
        $x++;
        return $x;
    }
    echo something();
  ?>