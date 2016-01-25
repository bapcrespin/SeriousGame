<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Inserer une question</title>
</head>
<body>
</br>

<div class="input-group col-md-8 col-md-offset-2">
Entrez une question...
</div>

</br>
<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Question</span>
  <input type="text" class="form-control" placeholder="Ecrire la question..." aria-describedby="basic-addon1">
</div>

</br>
<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Réponse A</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Réponse B</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Réponse C</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Réponse D</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon" id="basic-addon1">Réponse E</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1">
</div>

</br>
</br>

<div class="input-group col-md-8 col-md-offset-2">
Parmi les réponses écrites au-dessus, sélectionnez la bonne réponse :  
<select name="idReponse" id="idReponse" >
  <option value="1">A</option>
  <option value="2">B</option>
  <option value="3">C</option>
  <option value="4">D</option>
  <option value="5">E</option>
</select>
</div>
</br>
</br>

<div class="input-group col-md-8 col-md-offset-2">
Sélectionnez dans quel QCM vous souhaitez inscrire la question que vous avez édité au-dessus :   
<select name="idQcm" id="idQcm" >
  
</select>
</div>
</br>
</br>
</br>


<div class="col-md-8 col-md-offset-6">
 <button type="submit" class="btn btn-default">Enregistrer</button>
</div>
