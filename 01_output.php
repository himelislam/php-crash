<!-- echo - print string, number, html -->
<?php
echo 'himel';

// print- works like echo but only single arguments
print 'Himel print';

// print_(r) - Print single value and Arrays
print_r([1,2,3,4,7,8,9]);
print_r(['himel', 'bakita', 'roni']);

// var_dump()- Returns more info like types and length
var_dump('Himmmmellss');

// var_export()- similler to var_dump(). Outputs a string represantation of a variable 
var_export('Hello World')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Himel' ?></h1>
</body>
</html>
