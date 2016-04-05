<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" type="text/css" href="./css/numero.css">
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
        <h1>Parcours des Terminales</h1>     
      </div>
    </div>
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg center-block" data-toggle="modal" data-target="#myModal" name="bouttonListe">
        Liste des QCM
      </button>
      </br>
      <br>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Liste des QCM</h4>
            </div>
            <div class="modal-body">
              <img src="images/terminale.png" alt="">
            </div>
          </div>
        </div>
      </div>
    <div class="container">
      <?php
        $modeleQcm = new ModeleQcm();
        $j = 1;
        $cpt = 0;
        for ($k = 1; $k <= $nbQCM; $k++) {
          if ($modeleQcm->getNiveau($k) == 3) {
            $cpt++;
          }
        }
        for($i = 1; $i<=$nbQCM; $i++){
          if ($modeleQcm->getNiveau($i) == 3) {
            echo('<a class="numero mafonte3" href= index.php?entite=qcm&action=V&id='.$i.' alt="'.$modeleQcm->getTitreQcm($i).'" title="'.$modeleQcm->getTitreQcm($i).'">');
            if($j <10){
              echo ('0'.$j);
            }else{
              echo($j);
            }
            echo('</a>');
            
            if ($j != $cpt) {
              echo(' <img class="fleche" src="images/arrow3.png">');
            }
            if ($j%5==0){
              echo('</br>');
              echo('</br>');
              echo('<hr>');
            }
            $j++;
          } else {
            continue;
          }
        }

      ?>
      <!--
      <a href= index.php?entite=qcm&action=V&id=1> <img src="images/1.1.png"> </a>
      <img src="images/arrow1.png">
      <a href= index.php?entite=qcm&action=V&id=2><img src="images/1.2.png"></a>
      <img src="images/arrow1.png">
      <a href= index.php?entite=qcm&action=V&id=3><img src="images/1.3.png"></a>
      <img src="images/arrow1.png">
      <a href= index.php?entite=qcm&action=V&id=4><img src="images/1.4.png"></a>
    
      <img src="images/arrow2.png">
      <br/>
      <br/>
      <br/>
      <img src="images/1.5.png">
     
      
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
     <div class="col-md-9 personal-info">
      <div class ='mafonte3'><h3>La couleur du numéro dépend de son thème : </h3> </div>
      <div class='panelVert panel-qq'> <div class ='mafonte3'><h4>Aide à l'orientation &nbsp</h4></div> </div> 
      <div class='panelViolet1 panel-qq'> <div class ='mafonte3'><h4>Marché et Entreprises &nbsp </h4></div> </div> 
      <div class='panelViolet2 panel-qq'> <div class ='mafonte3'><h4>Revenus et Emploi &nbsp</h4></div> </div> 
      <div class='panelViolet3 panel-qq'> <div class ='mafonte3'><h4>Etat et Politique économique &nbsp </h4></div> </div> 
      <div class='panelBleu panel-qq'> <div class ='mafonte3'><h4>Epreuves du bac &nbsp</h4></div> </div> 
      <div class='panelOrange panel-qq'> <div class ='mafonte3'><h4>Savoir-faire en S.E.S &nbsp</h4></div> </div> 
      <div class='panelJaune panel-qq'> <div class ='mafonte3'><h4>Sociologie &nbsp</h4></div> </div> 
    </div>
     -->
  </div>
    <div class="container">
