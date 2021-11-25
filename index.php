<?php require 'session.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Projet POO-PHP</title>
  </head>
  <body>
    <main class="container">
      <section class="row">
        <h1 class="my-5">Tableau des utilisateurs</h1>
        <table class="table">
          <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Actions</th>
          </thead>
          <tbody>
          <?php foreach ($_SESSION['users'] as $user) {?>
            <tr class="">
              <td><?=$user->getNom()?></td>
              <td><?=$user->getPrenom()?></td>
              <td><?=$user->getMail()?></td>
              <td>
                <button class="mr-5">
                  <i class="fas fa-edit"></i>
                </button>
                <button>
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
          <?php }?>

          </tbody>
        </table>
        <a href="create.php">
          <button type="button"  class="btn btn-primary">Ajouter un utilisateur</button>
        </a>
      </section>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>

