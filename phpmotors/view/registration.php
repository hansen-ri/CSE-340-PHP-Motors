<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/index.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fugaz+One&family=Goldman&display=swap" rel="stylesheet">
    <title>Register | PHP Motors</title>
</head>
<body>
    <div id="content">
        <header>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?> 
        </header>
        <nav>
            <?php 
            echo $navList;
            ?>
        </nav>
        <main>
            <h2>Register for PHP Motors Account</h2>
            <p class="required">* indicates a required field</p>
                <form>
                    <label for="username">Username</label><span class="required">*</span><br>
                    <input type="text" id="username" name="username" value="John_Doe10"><br>
                    <label for="username">Confirm Username</label><span class="required">*</span><br>
                    <input type="text" id="username" name="username" value="John_Doe10"><br>
                    <label for="password">Password</label><span class="required">*</span><br>
                    <input type="text" id="password" name="password" value="J0hn_Do3"><br>
                    <label for="password">Confirm Password</label><span class="required">*</span><br>
                    <input type="text" id="password" name="password" value="J0hn_Do3"><br>
                    <a href=""><button>Register</button></a>
                </form>
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