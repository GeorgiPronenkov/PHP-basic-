<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <div class="container">
        <h1>Quizzer</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="current">
            Question 1 of 5
        </div>
        <p class="question">What does PHP stand for?</p>
        <form action="process.php" method="post">
            <ul class="choices">
                <li><input type="radio" value="1" name="choise">PHP:Hypertext pre....</li>
                <li><input type="radio" value="1" name="choise">Private home page</li>
                <li><input type="radio" value="1" name="choise">Personal home page.</li>
                <li><input type="radio" value="1" name="choise">Personal hyper text...</li>
            </ul>
            <input type="submit" value="Submit" />
        </form>
    </div>
</main>
<footer>
    <div class="container">
        Copyright &copy;2020, PHP Quizzer
    </div>
</footer>
</body>
</html>