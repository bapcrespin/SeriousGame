<div class="container" id="cnt1">
    <div class="col-md-6" id="panel1">
        <div class="panel panel-default">
            <div class="panel-body two-col">
	    		<?php
				    if ($bonus == 0) { 
			     		echo '<a href="index.php?entite=qcm&action=LB&id='.$idQcm.'"><button type="button" class="btn btn-success btn-sm btn-block"><span class="fa fa-send"></span>Valider</button></a>';
			     	} else {
			     		echo '<a href="index.php?entite=qcm&action=R&id='.$idQcm.'"><button type="button" class="btn btn-success btn-sm btn-block"><span class="fa fa-send"></span>Valider</button></a>';
			     	}
			    ?>
            </div>
        </div>
    </div>
</div>
