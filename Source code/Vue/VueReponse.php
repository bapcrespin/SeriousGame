<?php
    echo '<div class="col-md-6">';
    echo '<div class="well well-sm">';
    echo '<div class="checkbox">';
    echo '<label><input type="radio" name ="reponse'.$numQuestion.'" value=""> '.$numReponse.' - '.$reponse->getReponse().'</label>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
?>