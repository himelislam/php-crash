<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// if (isset($_POST['submit'])) {
//     // echo '<h3>' . $GET['username'] . '</h3>';
//     echo '<h3>' . $_POST['username'] . '</h3>';
//   }


if(isset($_POST['submit'])) {
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    $name2 = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $name2 = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo 'Name 2 '. $name . $age;

//     echo $name;
//     echo $age;
};

?>
  
  <!-- Pass data through a link -->
  <!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Link</a> -->
  
  
  <br><br>
  
  <!-- Pass data through a form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <div>
  <label>Password: </label>
    <input type="password" name="password">
  </div>
  <label>Age: </label>
    <input type="text" name="age">
  </div>
  <br>
    <input type="submit" name="submit" value="Submit">
  </form>