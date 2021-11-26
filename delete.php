<?php  
require 'session.php';

if(isset($_GET['id'])) {
    session_destroy($_SESSION);




  header("Location: index.php");
  exit();
  }
  
?>