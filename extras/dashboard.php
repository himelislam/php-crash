<?php
session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Welcome'. $_SESSION['username'] .'</h1>';
}
else{
    echo '<h1> Welcome Buddy</h1>';
    echo '<a href="/php-crash/13_sessions.php">Click Here Normal</a>';
}
?>

<a href="/php-crash/13_sessions.php">Click Here Buddy</a>
<a href="/php-crash/extras/logout.php">Logout</a>