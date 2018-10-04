<?php
session_start();
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
            <h1>PHP Quizzer - The end</h1>
        </div>
    </header>  
    <main>
        <div class="container">
            <h2>Gratulatios! You finished test!</h2>
            <p>Final score:<?=  $_SESSION['score'] ?></p>
            <?php unset($_SESSION['score']); ?>
            <a href="question.php?n=1" class="start">Take again</a>
            
        </div>

    </main>
    <footer>
        <div class="content">
            Copyright &copy <?= date('Y') ?>.
        </div>
    </footer>
  
</body>
</html>