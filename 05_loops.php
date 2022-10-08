<?php
// for($x = 0; $x <10; $x++){
//     echo 'Number : ' .$x . '<br>';
// }

// $x = 1;
// while($x <= 15 ){
//     echo 'Number is '. $x . '<br>';
//     $x++;
// }

$posts = ['first post', 'second post', 'third post', 'fourth post', 'fifth post'];

// for($x=0; $x < count($posts); $x++){
//     echo 'number '. $posts[$x]. '<br>';
// }

// foreach($posts as $post){
//     echo 'Helllo from ' . $post . '<br>';
// };

foreach($posts as $index => $post){
    echo 'Helllo from '. $index +1 . ' ' . $post . '<br>';
}