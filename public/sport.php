<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>Sport - WildGaming</title>
</head>
<body class="sportPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->
</header>

<div class="slideshow">

    <div class="gameSlides fade">
        <img src="assets/img/fake1.jpg" alt =" <?= array_keys($dataBase['Sport'])[0] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[0] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake2.jpg" alt =" <?= array_keys($dataBase['Sport'])[1] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[1] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake3.jpg" alt =" <?= array_keys($dataBase['Sport'])[2] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[2] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake4.jpg" alt =" <?= array_keys($dataBase['Sport'])[3] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[3] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake5.jpg" alt =" <?= array_keys($dataBase['Sport'])[4] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[4] ?></div>
    </div>

    <div class="gameSlides fade">
        <img src="assets/img/fake6.jpg" alt =" <?= array_keys($dataBase['Sport'])[5] ?>" style="width:100%">
        <div class="gameSlideText"><?= array_keys($dataBase['Sport'])[5] ?></div>
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

<section class="sport" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3>Game 1:</h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">EA Vancouver</li>
                    <li id="listLeft">PEGI 12</li>
                    <p id="listLeft">Synopsis: Le jeu de simulation auto !</p>
                    <a id="listLeft" href="https://www.metacritic.com">Note metacritic</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Développé par EA Vancouver</li>
                    <li id="listRight">Classification: PEGI 12</li>
                    <p id="listRight">Synopsis:  La simulation de foot annuelle !</p>
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
                <h3>Game 1:</h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">EA Vancouver</li>
                    <li id="listLeft">PEGI 12</li>
                    <p id="listLeft">Synopsis: Le jeu de simulation auto !</p>
                    <a id="listLeft" href="https://www.metacritic.com">Note metacritic</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Développé par EA Vancouver</li>
                    <li id="listRight">Classification: PEGI 12</li>
                    <p id="listRight">Synopsis:  La simulation de foot annuelle !</p>
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
                <h3>Game 1:</h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">EA Vancouver</li>
                    <li id="listLeft">PEGI 12</li>
                    <p id="listLeft">Synopsis: Le jeu de simulation auto !</p>
                    <a id="listLeft" href="https://www.metacritic.com">Note metacritic</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Développé par EA Vancouver</li>
                    <li id="listRight">Classification: PEGI 12</li>
                    <p id="listRight">Synopsis:  La simulation de foot annuelle !</p>
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

<form>
    <!-- Code pour le form -->
</form>

<?php

include '_footer.php';
?>

<script type="text/javascript" src="/script.js"></script>

</body>
</html>
