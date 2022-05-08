<?php
/*
* Proxy connection to the phpmotors database
*/

function phpmotorsConnect()
{
    $server = 'localhost';
    $dbname = 'phpmotor';
    $username = 'iClient';
    $password = 'KU*nfapR01tfIIqt';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $link = new PDO($dsn, $username, $password, $options);
        if (is_object($link)) {
            echo 'It worked!';
        }
        echo "here";
        return $link;
    } catch (PDOException $e) {
        // echo "It didn't work, error: " . $e -> getMessage();
        echo "I'm here.";
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}
phpmotorsConnect();
?>
