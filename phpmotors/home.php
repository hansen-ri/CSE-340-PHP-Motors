<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/index.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fugaz+One&family=Goldman&display=swap" rel="stylesheet">
    <title>PHP Motors | Home</title>
</head>

<body>
    <div id="content">
        <header>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <main>
            <h2>Welcome to PHP Motors!</h2>
            <div id="hero_div">
                <div id="car_info">
                    <ul>
                        <li>
                            <h3>DMC Delorean</h3>
                        </li>
                        <li>3 Cup Holders</li>
                        <li>Superman Doors</li>
                        <li>Fuzzy Dice!</li>
                    </ul>
                    <a href="#"><img src="/phpmotors/images/site/own_today.png" alt="Own Today Button" id="own_today_btn"></a>
                </div>
                <img src="/phpmotors/images/delorean.jpg" alt="Delorean Hero Image" id="hero_img">
            </div>
            <a href="#"><img src="/phpmotors/images/site/own_today.png" alt="Large Own Today" id="own_today_btn2"></a>
            <div id="flex_div">
                <div id="reviews">
                    <h3>DMC Delorean Reviews</h3>
                    <ul>
                        <li>"So fast its almost like traveling in time." [4/5]</li>
                        <li>"Coolest ride on the road."" [4/5]</li>
                        <li>"I'm feeling Marty McFly!" [5/5]</li>
                        <li>"The most futuristic ride of our day." [4.5/5]</li>
                        <li>"80's livin' and I love it!" [5/5]</li>
                    </ul>
                </div>
                <div id="upgrades">
                    <div id="grid_div">
                        <h3>Delorean Upgrades</h3>
                        <div id="upgrade_option1">
                            <div class="upgrade_option">
                                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                            </div>
                            <a href="#">
                                <p id="upgrade_link">Flux Capacitor</p>
                            </a>
                        </div>
                        <div id="upgrade_option2">
                            <div class="upgrade_option">
                                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals">
                            </div>
                            <a href="#">
                                <p id="upgrade_link">Flame Decals</p>
                            </a>
                        </div>
                        <div id="upgrade_option3">
                            <div class="upgrade_option">
                                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker">
                            </div>
                            <a href="#">
                                <p id="upgrade_link">Bumper Stickers</p>
                            </a>
                        </div>
                        <div id="upgrade_option4">
                            <div class="upgrade_option">
                                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
                            </div>
                            <a href="#">
                                <p id="upgrade_link">Hub Caps</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
<script></script>

</html>