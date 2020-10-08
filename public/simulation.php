<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<body class="simulationPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->
</header>

<div class="slideshow">

    <div class="gameSlides fade">
        <a href="#dtitle1"><img src="assets/img/carouselpics/sim/pcm.jpg" alt =" <?= array_keys($dataBase['Simulation'])[0] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#dtitle2"><img src="assets/img/carouselpics/sim/civ.jpg" alt =" <?= array_keys($dataBase['Simulation'])[1] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#dtitle3"><img src="assets/img/carouselpics/sim/csk.jpg" alt =" <?= array_keys($dataBase['Simulation'])[2] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#dtitle4"><img src="assets/img/carouselpics/sim/mfs.jpg" alt =" <?= array_keys($dataBase['Simulation'])[3] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#dtitle5"><img src="assets/img/carouselpics/sim/por.jpg" alt =" <?= array_keys($dataBase['Simulation'])[4] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#dtitle6"><img src="assets/img/carouselpics/sim/ann.jpg" alt =" <?= array_keys($dataBase['Simulation'])[5] ?>" style="width:100%"></a>
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

<section class="simulation" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="dtitle1">
            <div id="title">
                <h3>Game 1:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Release'] . ")" ?></span></h3>
            </div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://https://www.metacritic.com/game/pc/pro-cycling-manager-2020" target="_blank">Note : 66/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1178400/Pro_Cycling_Manager_2020/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="dtitle2">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Civilization 5']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Simulation']['Civilization 5']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Simulation']['Civilization 5']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Simulation']['Civilization 5']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/sid-meiers-civilization-v" target="_blank">Note : 90/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/8930/Sid_Meiers_Civilization_V/" target="_blank"> Acheter</a>
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
            <div id="dtitle3">
            <div id="title">
                <h3>Game 1:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Crusader King 3']['Release'] . ")" ?></span></h3>
            </div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Simulation']['Crusader King 3']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Simulation']['Crusader King 3']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Simulation']['Crusader King 3']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/crusader-kings-iii" target="_blank">Note : 91/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1158310/Crusader_Kings_III/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="dtitle4">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Microsoft Flight Simulator']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/microsoft-flight-simulator" target="_blank">Note : 92/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/1250410/Microsoft_Flight_Simulator/" target="_blank"> Acheter</a>
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
            <div id="dtitle5">
            <div id="title">
                <h3>Game 1:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Port Royale 4']['Release'] . ")" ?></span></h3>
            </div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Simulation']['Port Royale 4']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Simulation']['Port Royale 4']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Simulation']['Port Royale 4']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/port-royale-4" target="_blank">Note : 68/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1024650/Port_Royale_4/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="dtitle6">
            <div id="titleRight">
                <h3>Game 2:</h3>
            </div></div>
                <h3><?= array_keys($dataBase['Simulation'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Anno 2205']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Simulation']['Anno 2205']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Simulation']['Anno 2205']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Simulation']['Anno 2205']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/anno-2205" target="_blank">Note : 72/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/375910/Anno_2205/" target="_blank"> Acheter</a>
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
