<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>Simulation - WildGaming</title>
</head>
<body class="simulationPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <!-- Code HEADER -->
</header>

<div class="carousel">
    <!-- Code Carousel -->
</div>

<section class="simulation" id="article">
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


<?php include_once '_form.php'; ?>


<?php

include '_footer.php';
?>