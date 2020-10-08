<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<body class="sportPage">

<?php include_once '_headerSidePageResponsive.php' ?>
<?php include_once '../src/function.php' ?>
<?php

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


    $changeColor1 = $changeColor2 = $changeColor3 = $changeColor4 = $changeColor5 = $changeColor6 = "";
    $arrayChangeColors = [
        array_keys($dataBase[$theme])[0]  => $changeColor1,
        array_keys($dataBase[$theme])[1]  => $changeColor2,
        array_keys($dataBase[$theme])[2]  => $changeColor3,
        array_keys($dataBase[$theme])[3]  => $changeColor4,
        array_keys($dataBase[$theme])[4]  => $changeColor5,
        array_keys($dataBase[$theme])[5]  => $changeColor6,
    ];
    if (isset($_POST['game-list'])) {
        $arrayChangeColors[$_POST['game-list']] = 'red';
    }
?>


<div class="slideshow">

    <div class="gameSlides fade">
        <a href="#etitle1"><img src="assets/img/carouselpics/spo/nba.jpg" alt =" <?= array_keys($dataBase['Sport'])[0] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#etitle2"><img src="assets/img/carouselpics/spo/fif.jpg" alt =" <?= array_keys($dataBase['Sport'])[1] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#etitle3"><img src="assets/img/carouselpics/spo/for.jpg" alt =" <?= array_keys($dataBase['Sport'])[2] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#etitle4"><img src="assets/img/carouselpics/spo/mat.jpg" alt =" <?= array_keys($dataBase['Sport'])[3] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#etitle5"><img src="assets/img/carouselpics/spo/2k2.jpg" alt =" <?= array_keys($dataBase['Sport'])[4] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#etitle6"><img src="assets/img/carouselpics/spo/mad.jpg" alt =" <?= array_keys($dataBase['Sport'])[5] ?>" style="width:100%"></a>
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
            <img id="cover1" src="<?= $dataBase['Sport']['NBA 2K21']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="etitle1">
            <div id="title">
                <h3><?= array_keys($dataBase['Sport'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['NBA 2K21']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Sport']['NBA 2K21']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Sport']['NBA 2K21']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Sport']['NBA 2K21']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/playstation-4/nba-2k21" target="_blank">Note : 69/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://nba.2k.com/fr-FR/buy/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="etitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Sport'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['FIFA 21']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Sport']['FIFA 21']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Sport']['FIFA 21']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Sport']['FIFA 21']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/playstation-4/fifa-21" target="_blank">Note : 73/100</a>
                    <a class="buttonarticle" id="listRight" href="https://www.ea.com/games/fifa/fifa-21/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Sport']['FIFA 21']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Sport']['F1 2020']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="etitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['Sport'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['F1 2020']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Sport']['F1 2020']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Sport']['F1 2020']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Sport']['F1 2020']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/f1-2020" target="_blank">Note : 88/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/1080110/F1_2020/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="etitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Sport'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['Mario Tennis Aces']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Sport']['Mario Tennis Aces']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Sport']['Mario Tennis Aces']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Sport']['Mario Tennis Aces']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/switch/mario-tennis-aces" target="_blank">Note : 75/100</a>
                    <a class="buttonarticle" id="listRight" href="https://www.nintendo.com/games/detail/mario-tennis-aces-switch/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Sport']['Mario Tennis Aces']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Sport']['PGA Tour 2K21']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="etitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['Sport'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['PGA Tour 2K21']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Sport']['PGA Tour 2K21']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Sport']['PGA Tour 2K21']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Sport']['PGA Tour 2K21']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/playstation-4/pga-tour-2k21" target="_blank">Note : 76/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://pgatour.2k.com/fr-FR/buy/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="etitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Sport'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Sport']['Madden NFL 21']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Sport']['Madden NFL 21']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Sport']['Madden NFL 21']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Sport']['Madden NFL 21']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/playstation-4/madden-nfl-21" target="_blank">Note : 63/100</a>
                    <a class="buttonarticle" id="listRight" href="https://www.ea.com/games/madden-nfl/madden-nfl-21/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Sport']['Madden NFL 21']['Image'] ?>" alt="cover">
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
