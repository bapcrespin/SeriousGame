
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

  <!--<div class="barreQCM">
    <div class="progress vertical">
      <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' style='width:30%'></div>
    </div>
  </div>-->


  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="js/jquery.progressTimer.js"></script>  

  <div class="barreQCM">
    <div class="progress vertical">
      <div id="progressTimer"></div>
    </div>
  </div>

  <script language="JavaScript">
    $("#progressTimer").progressTimer({
      timeLimit: 30,
      warningThreshold: 10,
      baseStyle: 'progress-bar-success',
      warningStyle: 'progress-bar-danger',
      completeStyle: 'progress-bar-danger',
      onFinish: function() {
          document.location.href="index.php";
      }
  });
  </script>

  <!--<script language="JavaScript">
    duree="30";
    t();
  </script>

  

    <script language="JavaScript">
      function t() {
        var div=document.getElementById('compteur');
        s=duree;
        if(s <= 0) {
          document.location.href="index.php";
        }
        else {
         div.innerHTML = "<div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' style='width:30%'></div>";
        }
        duree=duree-1;
        window.setTimeout("t();",999);
      }
    </script>
  -->
