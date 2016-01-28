
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

  <?php
    if ($bonus == 0) { 
      echo '<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> ';
      echo '<script src="js/jquery.progressTimer.js"></script>  ';

      echo '<div class="barreQCM">';
      echo '<div class="progress vertical">';
      echo '<div id="progressTimer"></div>';
      echo '</div>';
      echo '</div>';

      echo '<script language="JavaScript">';
      echo '$("#progressTimer").progressTimer({';
      echo 'timeLimit: 30,';
      echo 'warningThreshold: 10,';
      echo 'baseStyle: "progress-bar-success",';
      echo 'warningStyle: "progress-bar-danger",';
      echo 'completeStyle: "progress-bar-danger",';
      echo 'onFinish: function() {';
      echo '  document.location.href="index.php?entite=qcm&action=LB&id='.$idQcm.'"';
      echo '}';
      echo '});';
      echo '</script>';
    }
  ?>