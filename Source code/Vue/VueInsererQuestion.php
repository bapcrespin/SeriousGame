</br>

<div class="input-group col-md-8 col-md-offset-2">
Entrez une question...
</div>
<form method="post" action="index.php?entite=question&action=C">
</br>
<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Question</span>
  <input type="text" class="form-control" placeholder="Ecrire la question..." aria-describedby="basic-addon1" id="nom" name="nom">
</div>

</br>
<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Réponse A</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1" id="reponse1" name="reponse1">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Réponse B</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1" id="reponse2" name="reponse2">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Réponse C</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1" id="reponse3" name="reponse3">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Réponse D</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1" id="reponse4" name="reponse4">
</div>

<div class="input-group col-md-8 col-md-offset-2">
  <span class="input-group-addon">Réponse E</span>
  <input type="text" class="form-control" placeholder="Ecrire une reponse " aria-describedby="basic-addon1" id="reponse5" name="reponse5">
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
  <?php foreach ($listeQcm as $qcm) {
    echo '<option value="'.$this->modeleQcm->getIdQcm($qcm->getNom()).'" ?>'.$qcm->getNom().'<option>';
  } ?>
</select>
</div>
</br>
</br>
</br>


<div class="col-md-8 col-md-offset-6">
 <button type="submit" class="btn btn-default" name="envoyer">Enregistrer</button>
</div>
</form>