    <?php
        echo '<div class="container" id="cnt1">';
        echo '<div class="col-md-6" id="panel1">';
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
        if ($question->getBonus() == 0) {
            echo '<h3 class="panel-title">'.$numQuestion.') '.$question->getQuestion().'</h3>';
            $_SESSION['question'.$numQuestion] = $question->getQuestion();
        } else {
             echo '<h3 class="panel-title">Question Bonus : '.$question->getQuestion().'</h3>';
             $_SESSION['question6'] = $question->getQuestion();
        }
        echo '</div>';
        echo '<div class="panel-body two-col">';
    ?>