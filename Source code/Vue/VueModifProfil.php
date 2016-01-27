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
        <h1>Profil</h1>     
      </div>
    </div>

   <div class="container">
    <h1>Modifier le profil </h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Mettre une nouvelle photo</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Modifier le mot de passe</h3> 
        <form class="form-horizontal" role="form" method="post" action="index.php?entite=profil&action=Uok">
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <?php 
                echo'<input class="form-control" type="text" placeholder="Disabled input" disabled="disabled" value="'.$_SESSION['id'].'">'; 
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Mot de passe:</label>
            <div class="col-md-8">
              <?php
                echo'<input type="password" name="mdp" id="mdp"/>'; 
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirmer le mot de passe:</label>
            <div class="col-md-8">
              <?php echo'<input type="password" name="confirm" id="confirm"/>'; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button class="btn btn-primary" type="submit" name ="modifier">Modifier</button>
              <span></span>
              <a href="index.php?entite=profil&action=R" class="btn btn-default" role="button">Annuler</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>