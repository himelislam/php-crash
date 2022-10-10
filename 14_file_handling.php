<?php

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/


$files = 'extras/users.txt';

if(file_exists($files)){
    // echo readfile($files);
    $handle = fopen($files, 'r');
    $contents = fread($handle, filesize($files));
    fclose($handle);
    echo $contents;
}
else{
    $handle = fopen($files, 'w');
    $contents = 'Lalu'. PHP_EOL . 'Kalu' . PHP_EOL . 'Tal' ;
    fwrite($handle, $contents);
    fclose($handle);
}