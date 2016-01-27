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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar top navbar-fixed-top">
      <div class="container">
        <div class="navbar-header"> 
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p><a class="navbar-brand white-text" href="index.php">Serious Game EsProd</a></p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" action="traitConnexion.php">
            <?php
              if(isset($_SESSION['identifie']) && ($_SESSION['identifie'] = 'OK')) {
                echo '<a href="deconnexion.php"><button type="button" class="btn btn-danger">Se déconnecter</button></a>';
              } else {
                echo '<div class="form-group">';
                echo '  <input type="text" name="login" placeholder="Email" class="form-control"> &nbsp;';
                echo '</div>';
                echo '<div class="form-group">';
                echo '  <input type="password" name="motPasse" placeholder="Mot de passe" class="form-control"> &nbsp;';
                echo '</div>';
                echo '<button type="submit" name="Envoyer" value="Valider" class="btn btn-success">Se connecter</button> ';
                echo '<a href="index.php?entite=inscription"><button type="button" class="btn btn-primary">S\'inscrire</button></a>';
              }
            ?>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!--<div class="marge"></div>-->