<?php
$fruites = ['apple', 'orange', 'pear', 'pineapple'];

// get leagth
// echo count ($fruites);

// Search Array
// var_dump(in_array('apple', $fruites));

// add to an array
$fruites[] = 'grape';
array_push($fruites, 'banana', 'strawberry');
array_unshift($fruites, 'mango');


array_pop($fruites);
array_shift($fruites);

// split into chunks
$chunked_array = array_chunk($fruites, 2);

// print_r($chunked_array);

// print_r($fruites);  

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);

// print_r($arr3);

// Array Combine

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

// print_r(array_flip($c));

$numbers = range(1,20);

// print_r($numbers);

$newNumber = array_map(function($number){
    return "Hi From Number $number";
}, $numbers);

$newNum = array_map(function($number){
    return "Hello Vai from $number";
}, $numbers);

// $newNum2 = array_map(function($number) => "helllo")

print_r($newNum);

// print_r($newNumber);

$lessThen10 = array_filter($numbers, fn($number) => $number <= 10); 
// print_r($lessThen10) ;

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

// print_r($sum);
// var_dump($sum);