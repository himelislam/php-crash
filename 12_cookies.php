<?php

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

setcookie('name', 'himel', time() + 86400);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}