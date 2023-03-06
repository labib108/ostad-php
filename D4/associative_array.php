<?php
    $name = [
        'first_name' => 'Abu',
        'last_name' => 'Backker',
        'age' => '23',
        'gender' => 'male'
    ];
print_r($name);
$serialised = serialize($name);
$new_name = unserialize($serialised);
print_r($new_name);
echo PHP_EOL;
unset($name['gender']);
print_r($name);
?>