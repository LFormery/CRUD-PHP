<?php
require "class.php"; 
  if(isset($_POST['valider']))
  {
  	if(isset($_POST['user-name']) && isset($_POST['user-prenom']) && isset($_POST['user-email']))
  	{
           $name=htmlspecialchars($_POST['user-name']);
           $prenom=htmlspecialchars($_POST['user-prenom']);
           $email=htmlspecialchars($_POST['user-email']);
           //echo   $name , $prenom , $email ;
             
          $user2 = new User ($name, $prenom, $email);
          var_dump($user2);	
  	}
  }

 
?>