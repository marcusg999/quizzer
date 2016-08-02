<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Quizzer</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header >
        <div class="container">
            <h1>PHP Quiz</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question">
                What does PHP stand for?
            </p>
            <form method = "post" action="process.php">
                <ul class="choices">
                  <li><input name="choice" type="radio" value="1" />PHP:PHP Hypertext PreProcessor</li>
                  <li><input name="choice" type="radio" value="1" />Private Home Page</li>
                  <li><input name="choice" type="radio" value="1" />Personal Home Page</li>
                  <li><input name="choice" type="radio" value="1" />PHP:PHP Hypertext Processor</li>
                </ul>
                <input type="submit" name="submit">

            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2014, PHP Quizzer
        </div>
    </footer>
</body>
</html>
