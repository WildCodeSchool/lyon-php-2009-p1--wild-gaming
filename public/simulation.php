<?php

include_once '../src/function.php';

$theme = "";
switch ($_SERVER['PHP_SELF']){
    case('/action.php'):
        $theme = "Action/Aventure";
        break;
    case('/FPS.php'):
        $theme = "FPS";
        break;
    case('/RPG.php'):
        $theme = "RPG";
        break;
    case('/simulation.php'):
        $theme = "Simulation";
        break;
    case('/sport.php'):
        $theme = "Sport";
        break;
    case('/strategie.php'):
        $theme = "Stratégie";
        break;
    case('/_form.php'):
        $theme = "Simulation";
        break;
    default:
        echo "error theme doesn't match";
}

$arrayGames = array_keys($dataBase[$theme]);

for($i = 0; $i < count($arrayGames); $i++ ){
    $arrayChangeColors[$arrayGames[$i]] = "";
}

if (isset($_POST['game-list'])) {
    $userGame = $_POST['game-list'];
    $arrayChangeColors[$userGame] = 'red';
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<body class="simulationPage">

<?php include_once '_headerSidePageResponsive.php' ?>
<?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->


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
    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[0]] ?>">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Simulation']['Pro Cycling Manager 2020']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="dtitle1">
            <div id="title">
                <h3><?= array_keys($dataBase['Simulation'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Pro Cycling Manager 2020']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://https://www.metacritic.com/game/pc/pro-cycling-manager-2020" target="_blank">Note : 66/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1178400/Pro_Cycling_Manager_2020/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>


    <div class="gridRight <?= $arrayChangeColors[$arrayGames[1]] ?>">
        <div class="detailRight">
            <div id="dtitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Simulation'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Civilization 5']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Simulation']['Civilization 5']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Civilization 5']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Civilization 5']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/sid-meiers-civilization-v" target="_blank">Note : 90/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/8930/Sid_Meiers_Civilization_V/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Simulation']['Civilization 5']['Image'] ?>" alt="cover">
        </div>
    </div>
    <div id="separator"></div>


    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[2]] ?>">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Simulation']['Crusader King 3']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="dtitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['Simulation'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Crusader King 3']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Simulation']['Crusader King 3']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Crusader King 3']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Crusader King 3']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/crusader-kings-iii" target="_blank">Note : 91/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1158310/Crusader_Kings_III/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>


    <div class="gridRight <?= $arrayChangeColors[$arrayGames[3]] ?>">
        <div class="detailRight">
            <div id="dtitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Simulation'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Microsoft Flight Simulator']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Microsoft Flight Simulator']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/microsoft-flight-simulator" target="_blank">Note : 92/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/1250410/Microsoft_Flight_Simulator/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Simulation']['Microsoft Flight Simulator']['Image'] ?>" alt="cover">
        </div>
    </div>
    <div id="separator"></div>


    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[4]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase['Simulation']['Port Royale 4']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="dtitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['Simulation'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Port Royale 4']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Simulation']['Port Royale 4']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Port Royale 4']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Port Royale 4']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/port-royale-4" target="_blank">Note : 68/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1024650/Port_Royale_4/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>


    <div class="gridRight <?= $arrayChangeColors[$arrayGames[5]] ?>">
        <div class="detailRight">
            <div id="dtitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Simulation'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Simulation']['Anno 2205']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Simulation']['Anno 2205']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Simulation']['Anno 2205']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Simulation']['Anno 2205']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/anno-2205" target="_blank">Note : 72/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/375910/Anno_2205/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Simulation']['Anno 2205']['Image'] ?>" alt="cover">
        </div>
    </div>

</section>


<?php include_once '_form.php'; ?>


<?php

include '_footer.php';
?>

<script type="text/javascript" src="/script.js"></script>

</body>
</html>
