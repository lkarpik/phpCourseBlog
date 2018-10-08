<?php
    include 'db.php';
    session_start();
    // Set question number
    $number = mysqli_real_escape_string($mysqli, $_GET['n']);
    
    /*
    * Get question
    */
    $query = "SELECT * FROM questions WHERE question_number = $number";
    // Get result

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();
    
    /*
    * Get answers
    */
    $query = "SELECT * FROM choices WHERE question_number = $number";
    // Get result

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

    
    
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
            <h1>PHP Quizzer - questions</h1>
        </div>
    </header>  
    <main>
        <div class="container">
            <div class="current">
                Question <?= $number ?> of <?= $_SESSION['total'] ?>
            </div>
            <p class="question">
                <?= $question['text'] ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()) : ?>
                    <li><input type="radio" name="choice" value="<?= $row['id'] ?>"><?= $row['text'] ?></li>
                    <?php endwhile; ?>                   
                </ul>
                <input type="submit" name="submit" value="Check Your answer">
                <input type="hidden" name="number" value="<?= $number ?>">
            </form>


        </div>      
    </main>
    <footer>
        <div class="container">
            Copyright &copy <?= date('Y') ?>.
        </div>
    </footer>
  
</body>
</html>