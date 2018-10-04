<?php
    include 'db.php';
    session_start();
    // Total numer of questions
    $query = "SELECT * FROM questions";
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $_SESSION['total'] = $results->num_rows; 

    mysqli_free_result($results);
    $mysqli->close();
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
            <h2>Test your knowledge</h2>
            <p>This is multiple choice quizz to test knowledge of PHP</p>
        
            <ul>
                <li>Number of question: <?= $_SESSION['total'] ?></li>
                <li>Type: multiple choice</li>
                <li>Estimated tme: <?php echo($_SESSION['total']*0.5); ?> minutes</li>
            </ul>
            <a href="question.php?n=1">Start a quiz</a>
        </div>

    </main>
    <footer>
        <div class="content">
            Copyright &copy <?= date('Y') ?>.
        </div>
    </footer>
  
</body>
</html>