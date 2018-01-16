<?php

  session_start();
  if (!isset($_SESSION['id'])) {

    header( 'Location: connexion.php');
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Changer d'avatar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include 'inc/header.php'?>
    <div class="container profil">
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <h1 class="text-xs-center">Changer d'avatar</h2>
          <div class="center-block">
            <img src="" alt="avatar" class="img-circle img-fluid">
          </div>
          <form action="avatar.php" method="post" enctype="multipart/form-data" class="p-y-3 p-x-2">
            <input type="file" name="avatar" class="form-control-file">
            <input type="submit" class="btn btn-success" value="Changer d'avatar">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
