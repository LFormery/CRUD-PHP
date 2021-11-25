<?php 
require 'session.php';
$id = (int)$_GET['id'];

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
      <h1 class="my-5">Modifier un utilisateur</h1>
      <form action="update.php" method="post">
      <div class="mb-3">
          <label for="inputPrenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="inputPrenom" value="<?=$_SESSION['users'][$id]->getPrenom()?>">
        </div>
        <div class="mb-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="inputNom" value="<?=$_SESSION['users'][$id]->getNom()?>">
        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" value="<?=$_SESSION['users'][$id]->getMail()?>">
        </div>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </section>
  </main>
</body>
</html>