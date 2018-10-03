<?php
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
                Question 1 of 5
            </div>
            <p class="question">
                What is PHP
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <li><input type="radio" name="choice" value="1">PHP Hypertext preprocessor</li>
                    <li><input type="radio" name="choice" value="2">PHP Hypertext processor</li>
                    <li><input type="radio" name="choice" value="3">PHP Hypertext editor</li>
                    <li><input type="radio" name="choice" value="4">PHP Presonal  preprocessor</li>
                </ul>
                <input type="submit" value="Check Your answer">

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