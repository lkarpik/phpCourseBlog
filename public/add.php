<?php
    include 'db.php';
    session_start();

    if (isset($_POST['submit'])) {
        $number = $_POST['question_number'];
        $text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];
        // Choicess array
        $choices = array();
        $choices[1] = $_POST['choice1']; 
        $choices[2] = $_POST['choice2']; 
        $choices[3] = $_POST['choice3']; 
        $choices[4] = $_POST['choice4']; 
        $choices[5] = $_POST['choice5']; 
        // $choices[0] = $_POST['correct_choice']; 
        
        // add question query
        $query = "INSERT INTO questions (question_number, text)
                    VALUES ('$number', '$text')";
        
        // Run query
        $insert = $mysqli->query($query) or die($mysqli->error.__LINE__);

        // validate 1st insert
        if ($insert) {
            foreach ($choices as $choice => $value) {
                if ($value != '') {
                    if ($choice == $correct_choice) {
                        $is_correct = 1;
                    } else {
                    $is_correct = 0;
                    }
                    // choice query
                    $query = "INSERT INTO choices (question_number, text, corect)
                                VALUES ('$number', '$value', '$is_correct')";
                    // Run
                    $insert = $mysqli->query($query) or die($mysqli->error.__LINE__);

                    if ($insert) {
                        continue;
                    } else {
                        die('Error : '.$mysqli->error);
                    }

                } 

            }
            $msg = 'Question added';
        }
    
    
    
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quizzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>  
    <main>
        <div class="container">
            <h2>Add a question</h2>
            <?php
                if (isset($msg)) {
                    echo '<p>'.$msg.'</p>';
                }
            
            ?>
            <form action="add.php" method="post">
                <p>
                    <label for="question_number">Question number:</label>
                    <input type="number" name="question_number" value='<?= $_SESSION['total']+1 ?>'>
                </p>
                <p>
                    <label for="question_text">Question text:</label>
                    <input type="text" name="question_text">
                </p>
                <p>
                    <label for="choice">Choice #1:</label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label for="choice">Choice #2:</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label for="choice">Choice #3:</label>
                    <input type="text" name="choice3">
                </p>
                <p>
                    <label for="choice">Choice #4:</label>
                    <input type="text" name="choice4">
                </p>
                <p>
                    <label for="choice">Choice #5:</label>
                    <input type="text" name="choice5">
                </p>
                <p>
                    <label for="choice">Correct choice #:</label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <input type="submit" value="Create question" name="submit">
                </p>    
                
            </form>

    </main>
    <footer>
        <div class="content">
            Copyright &copy <?= date('Y') ?>.
        </div>
    </footer>
  
</body>
</html>