<?php 
require 'session.php';

if($_POST != []) {
  $user = new User($_POST['user-prenom'],$_POST['user-name'],$_POST['user-email']);
  array_push($userList, $user);
  $_SESSION['users'] = serialize($userList);

  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>Projet POO-PHP</title>
</head>
<body>
  <main class="container">
    <section class="row">
      <h1 class="my-5">Ajouter un utilisateur</h1>
      <form action="create.php" method="POST" >
        <div class="form-group">
          <label for="inputNom">Nom</label>
          <input type="text" name="user-name" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputPrenom">Prénom</label>
          <input type="text" name="user-prenom" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="user-email" class="form-control">
        </div>
        <br>
        <button type="submit" name="valider" class="btn btn-primary">Ajouter</button>
      </form>
    </section>
  </main>
</body>
</html>