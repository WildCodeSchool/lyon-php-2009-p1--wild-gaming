<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>RPG - WildGaming</title>
</head>
<body class="rpgPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php'; ?>
    <!-- Code HEADER -->
</header>

<div class="slideshow">

    <div class="gameSlides fade">
        <img src="assets/img/fake1.jpg" alt =" <?= array_keys($dataBase['RPG'])[0] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[0] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake2.jpg" alt =" <?= array_keys($dataBase['RPG'])[1] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[1] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake3.jpg" alt =" <?= array_keys($dataBase['RPG'])[2] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[2] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake4.jpg" alt =" <?= array_keys($dataBase['RPG'])[3] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[3] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake5.jpg" alt =" <?= array_keys($dataBase['RPG'])[4] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[4] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake6.jpg" alt =" <?= array_keys($dataBase['RPG'])[5] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['RPG'])[5] ?></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>

<section class="rpg" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/the-dungeon-of-naheulbeuk-the-amulet-of-chaos" target="_blank">Note : 73/100</a>
                    <a id="listLeft" href="https://store.steampowered.com/app/970830/The_Dungeon_Of_Naheulbeuk_The_Amulet_Of_Chaos/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/sword-art-online-alicization-lycoris" target="_blank">Note : 53/100</a>
                    <a id="listRight" href="https://store.steampowered.com/app/1009290/SWORD_ART_ONLINE_Alicization_Lycoris/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Fire Emblem Fates']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['RPG']['Fire Emblem Fates']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['RPG']['Fire Emblem Fates']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['RPG']['Fire Emblem Fates']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/3ds/fire-emblem-fates-conquest" target="_blank">Note : 87/100</a>
                    <a id="listLeft" href="https://www.nintendo.fr/Jeux/Nintendo-3DS/Fire-Emblem-Fates-1026071.html" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Star Wars : The Old Republic']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/star-wars-the-old-republic" target="_blank">Note : 85/100</a>
                    <a id="listRight" href="https://www.swtor.com/fr/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Fantasy of Expedition']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['RPG']['Fantasy of Expedition']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['RPG']['Fantasy of Expedition']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['RPG']['Fantasy of Expedition']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/fantasy-of-expedition" target="_blank">Note : Non noté</a>
                    <a id="listLeft" href="https://store.steampowered.com/app/780670/Fantasy_of_Expedition/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['The Elder Scrolls Online']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['RPG']['The Elder Scrolls Online']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['RPG']['The Elder Scrolls Online']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['RPG']['The Elder Scrolls Online']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/the-elder-scrolls-online" target="_blank">Note : 71/100</a>
                    <a id="listRight" href="https://store.steampowered.com/agecheck/app/306130/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>
    <script>
        const article = document.getElementById("article");
        const navbarColor = document.querySelector(".navbar");
        switch (article.className) {
            case ('rpg'):
                navbarColor.style.backgroundColor = "var(--navbar-rpg-backgrnd)";
                break
            case ('action'):
                navbarColor.style.backgroundColor = "var(--navbar-action-backgrnd)";
                break
            case ('simulation'):
                navbarColor.style.backgroundColor = "var(--navbar-simu-backgrnd)";
                break
            case ('sport'):
                navbarColor.style.backgroundColor = "var(--navbar-sport-backgrnd)";
                break
            case ('strategie'):
                navbarColor.style.backgroundColor = "var(--navbar-strategy-backgrnd)";
                break
            case ('fps'):
                navbarColor.style.backgroundColor = "var(--navbar-fps-backgrnd)";
        }
    </script>

</section>


<?php include_once '_form.php'; ?>


<?php

include '_footer.php';
?>

<script type="text/javascript" src="/script.js"></script>

</body>
</html>
