<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>Stratégie - WildGaming</title>
</head>
<body class="strategiePage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->
</header>

<div class="slideshow">

    <div class="gameSlides fade">
        <img src="assets/img/fake1.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[0] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[0] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake2.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[1] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[1] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake3.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[2] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[2] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake4.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[3] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[3] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake5.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[4] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[4] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake6.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[5] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Stratégie'])[5] ?></div>
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

<section class="strategie" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['Stratégie'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Company of Heroes 2']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Stratégie']['Company of Heroes 2']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Stratégie']['Company of Heroes 2']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Stratégie']['Company of Heroes 2']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/company-of-heroes-2" target="_blank">Note : 80/100</a>
                    <a id="listLeft" href="https://store.steampowered.com/agecheck/app/231430/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/starcraft-ii-wings-of-liberty" target="_blank">Note : 93/100</a>
                    <a id="listRight" href="https://starcraft2.com/en-us/" target="_blank"> Acheter</a>
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
                <h3><?= array_keys($dataBase['Stratégie'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/age-of-empires-ii-definitive-edition" target="_blank">Note : 84/100</a>
                    <a id="listLeft" href="https://store.steampowered.com/app/813780/Age_of_Empires_II_Definitive_Edition/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/warcraft-iii-reforged" target="_blank">Note : 59/100</a>
                    <a id="listRight" href="https://eu.shop.battle.net/en-us/product/warcraft-iii-reforged?blzcmp=blizzard_hp_WarcraftIII:Reforged_card" target="_blank"> Acheter</a>
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
                <h3><?= array_keys($dataBase['Stratégie'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Total War : Warhammer 2']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/total-war-warhammer-ii" target="_blank">Note : 87/100</a>
                    <a id="listLeft" href="https://store.steampowered.com/app/594570/Total_War_WARHAMMER_II/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Star Wars : Empire at War']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/star-wars-empire-at-war" target="_blank">Note : 79/100</a>
                    <a id="listRight" href="https://store.steampowered.com/app/32470/STAR_WARS_Empire_at_War__Gold_Pack/" target="_blank"> Acheter</a>
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
