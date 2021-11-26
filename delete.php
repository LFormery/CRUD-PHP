<?php  
require 'session.php';
if(isset($_GET['id'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
?>