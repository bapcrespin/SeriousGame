
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

    <script language="JavaScript">
      function t() {
        var compteur=document.getElementById('compteur');
        s=duree;
        m=0;h=0;
        if(s<0) {
          compteur.innerHTML="terminé<br />"+"<a href=http://lien1.fr>continuer</a>"
        }
        else {
          if(s>59){
            m=Math.floor(s/60);
            s=s-m*60
          }
          if(m>59){
            h=Math.floor(m/60);
            m=m-h*60
          }
          if(s<10){
            s="0"+s
          }
          if(m<10){
            m="0"+m
          }
          compteur.innerHTML="Il reste : "+h+":"+m+":"+s
        }
        duree=duree-1;
        window.setTimeout("t();",999);
      }
    </script>
    <div id="compteur"></div>
    <script language="JavaScript">
      duree="30";
       t();
    </script>

