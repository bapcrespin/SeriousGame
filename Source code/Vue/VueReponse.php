<?php
    echo '<div class="col-md-6">';
    echo '<div class="well well-sm">';
    echo '<div class="checkbox">';
    if ($question->getBonus() == 0) {
        echo '<label><input type="radio" name ="reponse'.$numQuestion.'" value="'.$reponse->getReponse().'"> '.$numReponse.' - '.$reponse->getReponse().'</label>';
    } else {
        echo '<label><input type="radio" name ="reponse6" value="'.$reponse->getReponse().'"> '.$numReponse.' - '.$reponse->getReponse().'</label>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
?>