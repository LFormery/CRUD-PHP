<?php
require "class.php";
  if(isset($_POST['valider']))
  {
  	if(isset($_POST['use-name']) && isset($_POST['user-prenom']) && isset($_POST['user-email']))
  	{
  		if(!empty($_POST['user-name']) AND !empty($_POST['user-prenom']) AND !empty($_POST['user-email']))
  		{
           $name=htmlspecialchars($_POST['user-name']);
           $prenom=htmlspecialchars($_POST['user-prenom']);
           $email=htmlspecialchars($_POST['user-email']);

             
           // $User2= new User ( $name , $prenom ,   $email );
          echo   $name , $prenom ,   $email ;
  		}
  	}
  }

 
?>