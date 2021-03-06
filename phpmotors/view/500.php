<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/index.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fugaz+One&family=Goldman&display=swap" rel="stylesheet">
    <title>Server Error | PHP Motors</title>
</head>
<body>
    <div id="content">
        <header>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?> 
        </header>
        <main>
            <h2>Server Error</h2>
            <p>Sorry our server seems to be experiencing some technical difficulties. Please check back later.</p>
        </main>
        <hr>
        <footer>
        <?php 
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; 
            echo "<p>Last Modified: " . date ("F d Y H:i:s.", getlastmod()) . "</p>"
            ?>
        </footer>
    </div>
</body>
<script></script>
</html>