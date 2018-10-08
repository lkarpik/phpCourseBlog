<?php
    include 'db.php';
    session_start();

// Check if score is set

    if (!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $selected = $_POST['choice'];
        $next = $number + 1;
        
        /*
        * Get correct answer
        */
        
        $query = "SELECT * FROM choices WHERE question_number = $number AND corect = 1";

        // result
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        // get row
        $row = $result->fetch_assoc();

        // Set correct choice
        $correct = $row['id'];

        // comare
        if ($correct == $selected) {
            $_SESSION['score']++;
        }
        if ($number == $_SESSION['total']) {
            header("Location: final.php");
            exit();

        } else {
            header("Location: question.php?n=".$next);
        }

    }