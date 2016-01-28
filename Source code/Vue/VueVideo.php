    <!--<div class="marge"></div> -->
    <div class="jumbotron">
      <div class="container">
      </br></br>
      <h1 style ="font-family:'Century Gothic';" >
        <?php
          echo 'Vidéo : '.$nomQcm;
        ?>
      </h1>
      </div>
    </div>

    <div class="container">

    <div class=bs-example data-example-id=responsive-embed-16by9-iframe-youtube>
      <div class="embed-responsive embed-responsive-16by9">
        <?php
          echo '<iframe class=embed-responsive-item src="//www.youtube.com/embed/'.$codeVideo.'?rel=0" allowfullscreen></iframe>';
        ?>
      </div>
    </div>

	<div>
		<br/>
    <?php
      echo '<a href="index.php?entite=qcm&action=L&id='.$idQcm.'"><button type="button" class="btn btn-success btn-block">Accéder au QCM</button></a>';
    ?>
	</div>