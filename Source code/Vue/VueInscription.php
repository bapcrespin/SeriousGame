
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
        <h1>Inscription</h1>
      </div>
    </div>

    <div class="container">

     <form accept-charset="UTF-8" method="POST" action="index.php?entite=inscriptionOK" class="form-signup-home js-form-signup-home">
      <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="5FUCJzxKxBkfgtFPWkZvJOZdccXkTGynTLD4tvVQYyBF/xjBE1lCIVdK5tekDSkGU17e3P3YFJlwjWEL6cCYnA==" /></div>        <dl class="form">
        <div class="form-group">
          <p>Rentrez votre email (même faux) il vous servira d'identifiant pour vous connecter :</p>
          <input type="text" name = "email" placeholder="Email" class="form-control">
        </div><br/>
        <div class="form-group">
          <p>Rentrez votre mot de passe :</p>
          <input type="password" name ="password" placeholder="Mot de passe" class="form-control">
        </div><br/>
        <div class="form-group">
          <p>Confirmez votre mot de passe :</p>
          <input type="password" name ="vpassword" placeholder="Confirmation du mot de passe" class="form-control">
        </div><br/>
        <button class="btn btn-success btn-block" type="submit" name ="valider">Valider l'inscription</button>
    </form>