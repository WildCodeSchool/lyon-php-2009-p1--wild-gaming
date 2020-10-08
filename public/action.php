<?php include_once '../src/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>Action - WildGaming</title>
</head>
<body class="actionPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->
</header>

<div class="slideshow" id="slide">
        <div class="gameSlides fade">
            <a href="#atitle1"><img src="assets/img/carouselpics/act/ac.jpeg" alt =" <?= array_keys($dataBase['Action/Aventure'])[0] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[0] ?></div>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle2"><img src="assets/img/carouselpics/act/cyb.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[1] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[1] ?></div>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle3"><img src="assets/img/carouselpics/act/zel.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[2] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[2] ?></div>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle4"><img src="assets/img/carouselpics/act/red.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[3] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[3] ?></div>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle5"><img src="assets/img/carouselpics/act/wit.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[4] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[4] ?></div>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle6"><img src="assets/img/carouselpics/act/unc.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[5] ?>" style="width:100%"></a>
            <div class="gameSlideText"><?= array_keys($dataBase['Action/Aventure'])[5] ?></div>
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

<section class="action" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase['Sport']['NBA 2K21']['Image'] ?>" "cover">
        </div>
        <div class="details">
            <div id="atitle1">
            <div id="title">
                <h3><?= array_keys($dataBase['Action/Aventure'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/assassins-creed-origins" target="_blank">Note : 84/100</a>
                    <a id="listLeft" href="https://store.ubi.com/fr/assassins-creed-origins/592450934e0165f46c8b4568.html" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="gridRight">
        <div class="detailRight">
            <div id="atitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Action/Aventure'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/cyberpunk-2077" target="_blank">Note : Non noté</a>
                    <a id="listRight" href="https://www.cyberpunk.net/us/en/pre-order" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['Sport']['FIFA 21']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="atitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['Action/Aventure'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Release'] . ")" ?></span></h3>
            </div></div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/switch/the-legend-of-zelda-breath-of-the-wild" target="_blank">Note : 97/100</a>
                    <a id="listLeft" href="https://www.zelda.com/breath-of-the-wild/buy-now/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="atitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Action/Aventure'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/playstation-4/red-dead-redemption-2" target="_blank">Note : 97/100</a>
                    <a id="listRight" href="https://www.rockstargames.com/reddeadredemption2/restricted-content/agegate/form?redirect=https%3A%2F%2Fwww.rockstargames.com%2Freddeadredemption2%2Ffr%2Forder&options=&locale=fr_fr" target="_blank"> Acheter</a>
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
            <div id="atitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['Action/Aventure'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Release'] . ")" ?></span></h3>
            </div></div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/playstation-4/the-witcher-3-wild-hunt" target="_blank">Note : 92/100</a>
                    <a id="listLeft" href="https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="atitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Action/Aventure'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/playstation-4/uncharted-4-a-thiefs-end" target="_blank">Note : 93/100</a>
                    <a id="listRight" href="https://www.playstation.com/fr-fr/games/uncharted-4-a-thiefs-end-ps4/buy-now/" target="_blank"> Acheter</a>
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

<?php include '_footer.php'; ?>

<script type="text/javascript" src="/script.js"></script>

</body>
</html>
