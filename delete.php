<?php 
require 'session.php';

if(!isset($_GET['id'])) {
  die("Pas d'utilisateur trouvé");
}

$id = (int)$_GET['id'];

if(!isset($userList[$id])) {
  die("Pas d'utilisateur trouvé");
}

if (isset($_GET['confirm'])) {
  if ($_GET['confirm'] == 'yes') {
    $user = $userList[$id];
    unset($userList[$id]);
    $_SESSION['users'] = serialize($userList);
    header("Location: index.php");
  }
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
      <h1 class="my-5">Supprimer un utilisateur</h1>
      <p for="inputMail" class="form-label">Êtes-vous sur de vouloir supprimer l'utilisateur ?</p>
        <a href="delete.php?id=<?=$id?>&confirm=yes" class="btn btn-danger">Oui</a>
        <a href="index.php" class="btn btn-secondary">Non</a>
      </div>
    </section>
  </main>
</body>
</html>