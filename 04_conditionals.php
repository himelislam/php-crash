<?php
$age = 10;

// if($age >= 18){
//     echo 'You are old enough to vote';
// }
// else{
//     echo 'Sorry, You are not old enough to vote';
// }


$t = 17;

// if($t < 12) {
//     echo 'Good Morning';
// }
// else if($t <14){
//     echo 'Good Afternoon';
// }
// else if($t < 18){
//     echo 'Good Evening';
// }
// else{
//     echo 'Good Night';
// }

$post = ['first post'];

// if(!empty($post)){
//     echo $post[0];
// }
// else{
//     echo 'No Posts';
// }

// echo !empty($post) ? 'Hello' : 'Kello';

// $first_post = !empty($post) ? 'Hello' : 'Kello';

$fav_color = 'black';

switch($fav_color){
    case 'red' : 
        echo 'Your Favourite Color is Red';
        break;
    case 'blue' :
        echo 'Your Favourite Color is Blue';
        break;
    case 'green' :
        echo 'Your Favourite Color is Green';
        break;
    default :
        echo 'Red, Blue, Green none of this is your favourite color';
}