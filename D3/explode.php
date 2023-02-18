<?php

    // explode কোনো string কে array তে convert করে।
    //explode("separator", "string", "limit") এবং একটা array তে convert করে।

    $kuet = "kuet is one of the best university in bangladesh. The name of the university is KHULNA UNIVERSITY OF ENGINEERING and TECHNOLOGY";
    print $kuet . "\n";
    echo "-----------------------------------------------------" . "\n";
    print_r(explode(".", $kuet));
    // echo "-----------------------------------------------------" . "\n";
    // $KUET = array(explode(" ", $kuet));
    // foreach ($KUET as $name)
    // {
    //     echo $name . "\n";
    // }
?>