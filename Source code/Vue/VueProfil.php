<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Serious Game">
    <meta name="author" content="IUT Blagnac">
    <link rel="icon" href="../../favicon.ico">

    <title>Serious Game</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

  </head>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
        <h1 style ="font-family:'Century Gothic';" >Mon profil</h1>  	
      </div>
    </div>

   <div class="container">
  <div class="center">
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
<?php
      echo'<img src="'.$_SESSION['avatar'].'" alt="...">';
      echo'<div class="caption">';
      echo'<div text = center>';
      echo'<h3>'.$_SESSION['id'].'</h3>';
      echo'<p>'.$_SESSION['scoreTotal'].' points</p>';
      echo'</div>';
?>
        <p><a href="index.php?entite=profil&action=U" class="btn btn-primary" role="button">Modifier le mot de passe</a> <a href="./parcours.php" class="btn btn-default" role="button">Jouer</a></p>
      </div>
    </div>
  </div>
  </div>
</div>
