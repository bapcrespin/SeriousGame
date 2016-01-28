<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="3" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Information sur le score</h3>
      </div>
      <div class="modal-body">
        <h4>- Questions "classiques" : </h4>
        Chaque question classique rapporte 1 point.
      </br>
        <h4>- Questions "Bonus" : </h4>
        La question Bonus vous permet de gagner 3 points.
      </br>
    </br>
        <h4>Vous pouvez gagner au maximum 8 points pour un Qcm.</h4>
        Entrainez-vous pour obtenir un maximum de points !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron">
      <div class="container">
      </br></br>
        <h1 style ="font-family:'Century Gothic';" >Résultat du QCM</h1>   
      </div>
    </div>
</br>

<div class="jumbotron input-group col-md-8 col-md-offset-2">
<?php
$nbJuste = $r1 + $r2 + $r3 + $r4 +$r5;
$score=$nbJuste+($rBonus*3);
echo '<h2 class="cent-text">Votre score est de '.$score.' points !</h2>';
?>

<button type="button" class="btn btn-lg info-score" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-info-circle"></i>
</button>



</div>

  </br>
  </br> 

<div class="input-group col-md-8 col-md-offset-2 cent-text">

<?php 


$i = 0;
  while ($i < $nbJuste) {
      echo '<i class="fa fa-star star"></i> &nbsp &nbsp';
    $i = $i +1;

  }
  while ($i < 5) {
      echo '<i class="fa fa-star-o star"></i> &nbsp &nbsp';
    $i = $i +1;
  }
if ($rBonus == 1){
 echo '&nbsp &nbsp <i class="fa fa-star starBonus"></i> &nbsp &nbsp';
}else{
 echo '&nbsp &nbsp <i class="fa fa-star-o starBonus"></i> &nbsp &nbsp';
}
  ?>

</div>

<?php 
if ($r1 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">&nbspQuestion 1 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">&nbspQuestion 1 : Mauvaise réponse...</div>';
}

if ($r2 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">&nbspQuestion 2 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">&nbspQuestion 2 : Mauvaise réponse...</div>';
}

if ($r3 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">&nbspQuestion 3 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">&nbspQuestion 3 : Mauvaise réponse...</div>';
}

if ($r4 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">&nbspQuestion 4 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">&nbspQuestion 4 : Mauvaise réponse...</div>';
}

if ($r5 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">&nbspQuestion 5 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">&nbspQuestion 5 : Mauvaise réponse...</div>';
}

if ($rBonus == 1){
echo '</br><div class="input-group col-md-8 col-md-offset-2 alert alert-info" role="alert">&nbspQuestion BONUS : Bonne réponse !</div>';
}else{
echo '</br><div class="input-group col-md-8 col-md-offset-2 alert alert-info" role="alert">&nbspQuestion BONUS : Mauvaise réponse...</div>';
}
?>

  </br>
  </br> 
  </br>
<button type="button" class="btn btn-warning col-md-2 col-md-offset-5 ">Réessayer</button>
  </br>
  </br> 

<div class="container">