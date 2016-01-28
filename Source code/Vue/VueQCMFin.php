<div class="container" id="cnt1">
    <div class="col-md-6" id="panel1">
        <div class="panel panel-default">
            <div class="panel-body two-col">
	    		<?php
				    if ($bonus == 0) { 
			     		echo '<button type="submit" class="btn btn-success btn-sm btn-block"><span class="fa fa-send"></span> Valider</button>';

			     	} else {
			     		echo '<button type="submit" class="btn btn-success btn-sm btn-block" name="envoyer"><span class="fa fa-send"></span> Valider</button>';
			     	}
			    ?>
            </div>
        </div>
    </div>
</div>
</form>