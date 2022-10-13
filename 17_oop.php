<?php
/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // Method is a function that belongs to a Class

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User();
$user2 = new User();
$user3 = new User();

$user1->name = 'Himel';
$user2->name = 'Himel';

$user1->set_name('Kallu');


var_dump($user1);
echo '<br/> <br/>';
var_dump($user2);


echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
echo $user1->get_name();
echo $user3->get_name();
    echo $user1->get_name();
    echo $user3->get_name();