<?php
function registerUser($email){
    // echo 'Hello Baisab '. $email ;
}

registerUser('himel7100@gmail.com <br>');

function sum($n1, $n2){
    return $n1 + $n2;
}

$himel = sum(10,12);

// echo $himel +1;

// arrow function

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10,32);
