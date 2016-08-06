<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Check to see if score is set_error_handler
    if(!isset($_SESSION['score'])) {
      $_SESSION['score'] = 0;
    }

    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number++;

        /*
        * Get correct Choice
        */

        $query = "SELCT * FROM choices
                    WHERE question_number = $number AND is correct = 1";

        //Get Result
        $result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

        //Get row
        $row = $result->fetch_assoc();

        //Set correct choice
        $correct_choice = $row['id'];

        //Compare
        if ($correct_choice == $selected_choice) {
            //Answer is correct
            $_SESSION['score']++;
        }

        if($number == $total){
            header("Location: final.php");
        } else {
            header ("Location: question.php?n= next");
        }
}


