<?php 
require 'session.php';

if(!isset($_GET['id'])) {
  die("Pas d'utilisateur trouvé");
}

$id = (int)$_GET['id'];

if(!isset($userList[$id])) {
  die("Pas d'utilisateur trouvé");
}

$modifyUser = $userList[$id];

if($_POST != []) {
  $user = $userList[$id];
  $user->setPrenom($_POST['inputPrenom']);
  $user->setNom($_POST['inputNom']);
  $user->setMail($_POST['inputMail']);
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
      <h1 class="my-5">Modifier un utilisateur</h1>
      <form action="update.php?id=<?=$id?>" method="post">
      <div class="mb-3">
          <label for="inputPrenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="inputPrenom" value="<?=$modifyUser->getPrenom()?>">
        </div>
        <div class="mb-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="inputNom" value="<?=$modifyUser->getNom()?>">
        </div>
        <div class="mb-3">
          <label for="inputMail" class="form-label">Email</label>
          <input type="email" class="form-control" name="inputMail" value="<?=$modifyUser->getMail()?>">
        </div>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </section>
  </main>
</body>
</html>