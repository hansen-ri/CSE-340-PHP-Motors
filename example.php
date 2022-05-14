<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Code</title>
</head>
<body>
    <?php
    // create a random number between 1 and 100 or 1,000
    $randnum = rand(1,1000);
    $line = "Your number is less than or equal to ";

    echo "<h3>Random Number Switch Cases:</h3>";
    switch ($randnum) {
        case $randnum <= 10:
            echo "{$line} 10.";
            break;
        case $randnum <= 20:
            echo "{$line} 20.";
            break;
        case $randnum <= 30:
            echo "{$line} 30.";
            break;
        case $randnum <= 40:
            echo "{$line} 40.";
            break;
        case $randnum <= 50:
            echo "{$line} 50.";
            break;
        case $randnum <= 60:
            echo "{$line} 60.";
            break;
        case $randnum <= 70:
            echo "{$line} 70.";
            break;
        case $randnum <= 80:
            echo "{$line} 80.";
            break;
        case $randnum <= 90:
            echo "{$line} 90.";
            break;
        case $randnum <= 100:
            echo "{$line} 100.";
            break;          
        default:
            echo "You did not get a random number under 100. <br>";
    }
    echo "<br>" . "Your random number was: " . $randnum;

// Presentation 2 Code

    echo "<br> <h3>include() Example:</h3>";
    echo "<hr>";
    include_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; 

    include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; 

    echo "<hr>";


    // header("Location: http://localhost/phpmotors/home.php");
    ?>
</body>
</html>