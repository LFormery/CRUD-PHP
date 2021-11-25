<?php

session_start();
session_destroy();

session_start();
require('class.php');
$_SESSION['user1'] = new User($user1);
$_SESSION['user2'] = new User("Laetitia", "Pinto", "email@gmail.com");
$_SESSION['user3'] = ["Marc", "PINTO"];
print_r($_SESSION);

?>