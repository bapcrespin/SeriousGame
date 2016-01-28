<div class="jumbotron">
      <div class="container">
      </br></br>
        <h1 style ="font-family:'Century Gothic';" >Résultat du QCM</h1>   
      </div>
    </div>
</br>

<div class="jumbotron input-group col-md-8 col-md-offset-2">

  <h2 class="cent-text">Votre score est de 45 points !</h2>

</div>

  </br>
  </br> 

<div class="input-group col-md-8 col-md-offset-2 cent-text">

<?php 
$r1 = 1;
$r2 = 1;
$r3 = 0;
$r4 = 1;
$r5 = 0;
$rBonus = 0;

$nbJuste = $r1 + $r2 + $r3 + $r4 +$r5;
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
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">Question 1 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">Question 1 : Mauvaise réponse...</div>';
}

if ($r2 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">Question 2 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">Question 2 : Mauvaise réponse...</div>';
}

if ($r3 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">Question 3 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">Question 3 : Mauvaise réponse...</div>';
}

if ($r4 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">Question 4 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">Question 4 : Mauvaise réponse...</div>';
}

if ($r5 == 1){
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert-success" role="alert">Question 5 : Bonne réponse !</div>';
}else{
echo '<div class="input-group col-md-8 col-md-offset-2 alert alert alert-danger" role="alert">Question 5 : Mauvaise réponse...</div>';
}

if ($rBonus == 1){
echo '</br><div class="input-group col-md-8 col-md-offset-2 alert alert-info" role="alert">Question BONUS : Bonne réponse !</div>';
}else{
echo '</br><div class="input-group col-md-8 col-md-offset-2 alert alert-info" role="alert">Question BONUS : Mauvaise réponse...</div>';
}

?>
<div class="container">