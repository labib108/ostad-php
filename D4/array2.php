<?php
    $friend = [
        "versity" => [
            'college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ],
            'non-college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ]
        ],
        'non-versity' => [
            'college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ]
        ]
    ];
    //print_r($friend);
    echo $friend['versity']['non-college']['school'][3] . "\n";

    $fruits = ['apple','banana','orange','mango'];
    $some_fruits = array_slice($fruits,1,2);
    print_r($some_fruits);
    $value = ['a' => 'apple','b' => 'banana','c' => 'orange',78 => 12, 'd' => 'mango', 'e' => 'grapes'];
    $some_value = array_slice($value,1,-1 ,true);
    print_r($some_value);
    $some_value = array_splice($value,1,-1 ,true);
    print_r($some_value);
?>