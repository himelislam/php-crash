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
    echo $_POST['name'];
    echo $_POST['age'];
};

echo $_GET['name'];
echo $_GET['age'];
echo 'His Profession is a ' . $_GET['profession'];
echo '<br/>';
echo 'And His Interest is in Always ' .  $_GET['interest'];
echo '<br/>';

?>
  
  <!-- Pass data through a link -->
  <!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Link</a> -->

  <a href="<?php echo $_SERVER['PHP_SELF'];?>?profession=Player&interest=opposite">Click Here</a>
  
  
  <br><br>
  
  Pass data through a form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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