<?php
// echo 'Himel';
$numbers = [1,2,3,6,54121,9,2,89,2,21,6,26,];
$fruites = ['himel', 'surat', 'Names','nammmmamma'];

$places = array('singapor', 'bangladesh', 'india');

$colors = [
    1=> 'One',
    3=> 'Three',
    7=> 'Seven'
];

$colors2 = [
    'red'=> 'One',
    'blue'=> 'Three',
    'green'=> 'Seven'
];

$person = [
    'first_name' => 'Himel',
    'last_name' => 'Islam',
    'email' => 'himel7100@gmail.com'
];


$persons = [
    [
        'first_name' => 'Himel',
        'last_name' => 'Islam',
        'email' => 'himel7100@gmail.com'
    ],
    [
        'first_name' => 'Zohn',
        'last_name' => 'Doe',
        'email' => 'zohn@gmail.com'
    ],
    [
        'first_name' => 'Lizi',
        'last_name' => 'Shen',
        'email' => 'lizi@gmail.com'
    ],
    [
        'first_name' => 'Monar',
        'last_name' => 'doe',
        'email' => 'monar@gmail.com'
    ],
];

// var_dump($colors);
// print_r($colors);

echo $persons[1]['email'];

// var_dump(json_encode($persons)); - stringify to parse --- encode to decode