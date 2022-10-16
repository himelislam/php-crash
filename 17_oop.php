<?php
/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a Class

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('himel', 'Himel7100@gmail.com', 'Himel43443');
$user2 = new User('John', 'john2233@gmail.com', 'Hoimmell');


echo $user1->name;
echo $user1->email;



//Inheritence 

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent :: __construct($name, $email, $password);
        $this->title = $title;
    }
}

$user4 = new Employee('Mitul', 'mitul2121@gmail.com', 'haaaaaa', 'Supervisor');

// var_dump($user4);

print_r($user4);






// $user1->name = 'Himel';
// $user2->name = 'Himel';

// $user1->set_name('Kallu');


// var_dump($user1);
// echo '<br/> <br/>';
// var_dump($user2);


// echo $user1->get_name();