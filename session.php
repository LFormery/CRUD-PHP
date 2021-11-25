<?php
require_once 'class.php';

session_start();

if (!isset($_SESSION['users'])) {
  $userList = [
    new \User("Laetitia", "Pinto", "pinto@gmail.com"),
    new \User("Jean", "Reno", "reno@gmail.com"),
    new \User("Adam", "Driver", "kylo@gmail.com"),
  ];
  $_SESSION['users'] = serialize($userList);
} else {
  $userList = unserialize($_SESSION['users'], [
    "allowed_classes" => true,
  ]);
}
