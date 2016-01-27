    <!--<div class="marge"></div> -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
        <?php
          echo '<h1>Vidéo : '.$nomQcm.'</h1>';
        ?>
      </div>
    </div>

    <div class="container">
      <?php
        echo '<p>Code Vidéo : '.$codeVideo.'</p>';
      ?>

     <div>
      <?php
    		echo '<object type="application/x-shockwave-flash" width="1135" height="650" data="http://www.youtube.com/v/'.$codeVideo.'&hl=fr">';
    		echo '<param name="movie" value="http://www.youtube.com/v/'.$codeVideo.'&hl=fr" />';
      ?>

			<param name="wmode" value="transparent" />
			<param name="allowFullScreen" value="true">
		</object>
	</div>

	<div>
		<br/>
    <?php
      echo '<a href="index.php?entite=qcm&action=L&id='.$idQcm.'"><button type="button" class="btn btn-success btn-block">Accéder au QCM</button></a>';
    ?>
	</div>