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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


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
            <a class="navbar-brand white-text" href="index.php"> Accueil</a>
            <a class="navbar-brand white-text">|</a>
            <div class="dropdown navbar-left">
              <a id="drop1" class="dropdown-toggle navbar-brand white-text" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Les explorateurs des S.E.S <span class="caret"></span></a>
              <ul id="dropdownmenu1" class="dropdown-menu" aria-labelledby="drop1">
                <li><a href="index.php?entite=parcours1">Les Secondes</a></li>
                <li><a href="index.php?entite=parcours2">Les Premières</a></li>
                <li><a href="index.php?entite=parcours3">Les Terminales</a></li>
                <li><a href="index.php?entite=parcours4">Le Bac</a></li>
              </ul>
            </div>
          </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" action="traitConnexion.php">
            <?php
              if(isset($_SESSION['identifie']) && ($_SESSION['identifie'] = 'OK')) {
                echo '<a href="index.php?entite=profil&action=R"><button type="button" class="btn btn-info">Mon profil</button></a> &nbsp';
                echo '<a href="deconnexion.php"><button type="button" class="btn btn-danger">Se déconnecter</button></a>';
                 if($_SESSION['id'] == 'admin') {
                  echo '&nbsp <a href="index.php?entite=qcm&action=C"><button type="button" class="btn btn-warning">Ajouter un QCM</button></a> &nbsp';
                  echo '<a href="index.php?entite=question&action=C"><button type="button" class="btn btn-warning">Ajouter des Questions/Réponses</button></a> &nbsp';
                 }
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