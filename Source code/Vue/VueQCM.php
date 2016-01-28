
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
        <?php
          echo '<h1>QCM : '.$nomQcm.'</h1>';
        ?>
      </div>
    </div>

<div class="container">

  <div class="barreQCM" id="compteur">
    <div class="progress vertical">
        <script language="JavaScript">
          duree="30";
          t();
        </script>
      
    </div>
  </div>

  

    <script language="JavaScript">
      function t() {
        var compteur=document.getElementById('compteur');
        s=duree;
        if(s<0) {
          document.location.href="index.php?entite=qcm&action=R";        }
        else {
          compteur.innerHTML='<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:'+duree/300+"></div>'
        }
        duree=duree-1;
        window.setTimeout("t();",999);
      }
    </script>
