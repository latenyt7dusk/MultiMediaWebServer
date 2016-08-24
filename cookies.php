<?php 
$name = "Guest";
$expire = time() + (60*60*24*7);
setcookie($name, $expire);
?>