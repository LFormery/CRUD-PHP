<?php

session_start();
session_destroy();

session_start();
require 'class.php';

$_SESSION['users'] = [
  new User("Laetitia", "Pinto", "pinto@gmail.com"),
  new User("Jean", "Reno", "reno@gmail.com"),
  new User("Adam", "Driver", "kylo@gmail.com"),
];
