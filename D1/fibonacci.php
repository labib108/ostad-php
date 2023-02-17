// 0 1 1 2 3 5 8 13 21 34 55 89 ...
<?php
    $pre_num = 0;
    $num = 1;
    $post_num = 1;
    for ($i = 0; $i <= 15; $i++) {
        echo $pre_num . " ";
        $post_num = $pre_num + $num; 
        $pre_num = $num;
        $num = $post_num;
        
    }
?>