<?php
  session_start();
  if(!isset($_SESSION['identifie'])) {
    header('location:inscription.php');
  } 
?>

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
        </div>
        <a class=" navbar-brand white-text" style ="position: absolute;left: 40%;text-align: center;margin: auto;"><h4><button type="button" class="btn btn-success"><img src="./images/tete16.png"></button>&nbsp;&nbsp;&nbsp;Admin - 46 pts    Niv.3</h4></a>
        
        <div class="navbar-collapse collapse" >
          <ul class="nav navbar-nav pull-left">
            <a class="white-text" href="index.php"><h4>Accueil</h4></a>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <a href="deconnexion.php"><button type="button" class="btn btn-danger">Se déconnecter</button></a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
        <h1>Parcours</h1>
      </div>
    </div>

    <div class="container">

      <h2>Vous êtes actuellement au niveau 3 !</h2>
      
      <img src="./images/parcours.png" alt="Parcours">
      <br/>
      <br/>

      <hr>

      <footer>
        <p>&copy; Patrice CUPERTY, Tristan CABANTOUS, Simon CASTAGNE, Nicolas CELLIER, Baptiste CRESPIN 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
