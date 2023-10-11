<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1>Odd and Even Number Checker</h1>

    <?php
    $number = 5; // Change this value to check for odd or even

    if ($number % 2 == 0) {
        echo "<h2>The number $number is even.</h2>";
    } else {
        echo "<h2>The number $number is odd.</h2>";
    }
    ?>
</body>
</html>