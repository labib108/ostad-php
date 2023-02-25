<?php
    
    // 1. array_pop() =>> removes the last element of the array
    // 2. array_push() =>> adds an element to the end of the array
    // 3. array_shift() =>> removes the first element of the array
    // 4. array_unshift() =>> adds an element to the beginning of the array
    // 5. array_splice() =>> removes elements from the array
    // 6. array_reverse() =>> reverses the array
    // 7. array_keys() =>> returns the keys of the array
    // 8. array_values() =>> returns the values of the array
    // 9. array_merge() =>> merges two arrays
    // 10. array_intersect() =>> returns the intersection of two arrays
    // 11. array_diff() =>> returns the difference of two arrays
    // 12. array_filter() =>> filters the array
    // 13. array_map() =>> applies a function to each element of the array
    // 14. array_reduce() =>> applies a function to each element of the array
    // 16. array_walk() =>> applies a function to each element of the array
    


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