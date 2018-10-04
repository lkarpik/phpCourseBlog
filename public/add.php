<?php
    include 'db.php';

    if (isset($_POST['submit'])) {
        

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
            <form action="add.php" method="post">
                <p>
                    <label for="question_number">Question number:</label>
                    <input type="number" name="question_number">
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