<html>
<head>
  <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Inserer un QCM</title>
</head>
<body>
<!-- Single button -->
</br>
<div class="input-group col-md-8 col-md-offset-2">
Création d'un QCM...
</div>
</br>
<form method="post" action="index.php?entite=qcm&action=C">
  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="nom">Nom du QCM</span>
    <input type="text" class="form-control" placeholder="Entrez le nom du Qcm" aria-describedby="basic-addon1">
  </div>
</br>
    <div class="input-group col-md-8 col-md-offset-2">
 Sélectionnez le niveau dans lequel vous souhaitez insérer votre QCM:  
  <select name="niveau" id="niveau" >
    <option value="1">Niveau 1</option>
    <option value="2">Niveau 2</option>
    <option value="3">Niveau 3</option>
  </select>
  </div>
</br>
  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="url">YouTube</span>
    <input type="text" class="form-control" placeholder="Entrez l'url de la video" aria-describedby="basic-addon1">
  </div>

  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="temps">Temps</span>
    <input type="text" class="form-control" placeholder="Entrez le temps nécessaire pour effectuer les questions du QCM sans prendre compte de la question Bonus (en secondes)" aria-describedby="basic-addon1">
  </div>

  </br>
  </br>
  </br>
  </br>

  <div class="input-group col-md-8 col-md-offset-2">
  Entrez la question Bonus de ce QCM...
  </div>

  </br>
  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="question">Question Bonus</span>
    <input type="text" class="form-control" placeholder="Ecrire la question Bonus" aria-describedby="basic-addon1">
  </div>

  </br>
  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="reponse1">Réponse Bonus A</span>
    <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
  </div>

  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="reponse2">Réponse Bonus B</span>
    <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
  </div>

  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="reponse3">Réponse Bonus C</span>
    <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
  </div>

  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="reponse4">Réponse Bonus D</span>
    <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
  </div>

  <div class="input-group col-md-8 col-md-offset-2">
    <span class="input-group-addon" id="reponse5">Réponse Bonus E</span>
    <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
  </div>

  </br>
  </br>

  <div class="input-group col-md-8 col-md-offset-2">
  Parmi les réponses écrites au-dessus, sélectionnez la bonne réponse :  
  <select name="idReponse" id="idReponse" >
    <option value="1">Réponse A</option>
    <option value="2">Réponse B</option>
    <option value="3">Réponse C</option>
    <option value="4">Réponse D</option>
    <option value="5">Réponse E</option>

  </select>
  </div>

  </br>
  </br>
  </br>

  <div class="col-md-8 col-md-offset-6">
   <button type="submit" class="btn btn-default" name="envoyer">Enregistrer</button>
  </div>
</form>
</body>
</html>