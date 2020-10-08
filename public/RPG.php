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
        echo "error theme don't match";
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
<body class="rpgPage">

<?php include_once '_headerSidePageResponsive.php' ?>


    <!--Code HEADER -->

<div class="slideshow">

    <div class="gameSlides fade">
        <a href="#ctitle1"><img src="assets/img/carouselpics/rpg/amc.jpg" alt =" <?= array_keys($dataBase['RPG'])[0] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ctitle2"><img src="assets/img/carouselpics/rpg/swa.jpg" alt =" <?= array_keys($dataBase['RPG'])[1] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ctitle3"><img src="assets/img/carouselpics/rpg/fef.jpg" alt =" <?= array_keys($dataBase['RPG'])[2] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ctitle4"><img src="assets/img/carouselpics/rpg/sws.jpg" alt =" <?= array_keys($dataBase['RPG'])[3] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ctitle5"><img src="assets/img/carouselpics/rpg/foe.jpg" alt =" <?= array_keys($dataBase['RPG'])[4] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ctitle6"><img src="assets/img/carouselpics/rpg/eso.jpg" alt =" <?= array_keys($dataBase['RPG'])[5] ?>" style="width:100%"></a>
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
    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[0]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="ctitle1">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['RPG']['The Dungeon of Naheulbeuck : The Amulet of Chaos']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/the-dungeon-of-naheulbeuk-the-amulet-of-chaos" target="_blank">Note : 73/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/970830/The_Dungeon_Of_Naheulbeuk_The_Amulet_Of_Chaos/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[1]] ?>">
        <div class="detailRight">
            <div id="ctitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['RPG']['Sword Art Online : Alicization Lycoris']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/sword-art-online-alicization-lycoris" target="_blank">Note : 53/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/1009290/SWORD_ART_ONLINE_Alicization_Lycoris/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['RPG']['Sword Art Online : Alicization Lycoris']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[2]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['RPG']['Fire Emblem Fates']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="ctitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Fire Emblem Fates']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['RPG']['Fire Emblem Fates']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['RPG']['Fire Emblem Fates']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['RPG']['Fire Emblem Fates']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/3ds/fire-emblem-fates-conquest" target="_blank">Note : 87/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://www.nintendo.fr/Jeux/Nintendo-3DS/Fire-Emblem-Fates-1026071.html" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[3]] ?>">
        <div class="detailRight">
            <div id="ctitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Star Wars : The Old Republic']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['RPG']['Star Wars : The Old Republic']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/star-wars-the-old-republic" target="_blank">Note : 85/100</a>
                    <a class="buttonarticle" id="listRight" href="https://www.swtor.com/fr/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['RPG']['Star Wars : The Old Republic']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[4]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['RPG']['Fantasy of Expedition']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="ctitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['RPG'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['Fantasy of Expedition']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['RPG']['Fantasy of Expedition']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['RPG']['Fantasy of Expedition']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['RPG']['Fantasy of Expedition']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/fantasy-of-expedition" target="_blank">Note : Non noté</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/780670/Fantasy_of_Expedition/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[5]] ?>">
        <div class="detailRight">
            <div id="ctitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['RPG'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['RPG']['The Elder Scrolls Online']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['RPG']['The Elder Scrolls Online']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['RPG']['The Elder Scrolls Online']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['RPG']['The Elder Scrolls Online']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/the-elder-scrolls-online" target="_blank">Note : 71/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/agecheck/app/306130/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['RPG']['The Elder Scrolls Online']['Image'] ?>" alt="cover">
        </div>
    </div>


</section>


<?php include_once '_form.php'; ?>


<?php include '_footer.php'; ?>

<script type="text/javascript" src="/script.js"></script>


</body>
</html>
