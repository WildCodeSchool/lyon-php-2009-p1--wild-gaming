<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

</head>
<body class="fpsPage">

<?php include_once '_headerSidePageResponsive.php' ?>

<?php include_once '../src/function.php'; ?>

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
        <a href="#btitle1"><img src="assets/img/carouselpics/fps/doe.jpg" alt =" <?= array_keys($dataBase['FPS'])[0] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#btitle2"><img src="assets/img/carouselpics/fps/com.jpg" alt =" <?= array_keys($dataBase['FPS'])[1] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#btitle3"><img src="assets/img/carouselpics/fps/btv.jpg" alt =" <?= array_keys($dataBase['FPS'])[2] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#btitle4"><img src="assets/img/carouselpics/fps/csg.jpg" alt =" <?= array_keys($dataBase['FPS'])[3] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#btitle5"><img src="assets/img/carouselpics/fps/sbf.png" alt =" <?= array_keys($dataBase['FPS'])[4] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#btitle6"><img src="assets/img/carouselpics/fps/bor.jpg" alt =" <?= array_keys($dataBase['FPS'])[5] ?>" style="width:100%"></a>
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

<section class="fps" id="article">
    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[0]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase['FPS']['Doom Eternal']['Image'] ?>" "cover">
        </div>
            <div class="details">
                <div id="title">
                    <h3><?= array_keys($dataBase['FPS'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Doom Eternal']['Release'] . ")" ?></span></h3>
                </div>
                <div id="infos">
                    <ul>
                        <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['FPS']['Doom Eternal']['Studio'] ?> </li>
                        <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['FPS']['Doom Eternal']['PEGI'] ?></li>
                        <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Doom Eternal']['Synopsis'] ?></p>
                        <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/playstation-4/doom-eternal" target="_blank">Note : 87/100</a>
                        <a class="buttonarticle" id="listLeft" href="https://bethesda.net/en/game/doom" target="_blank">Acheter</a>
                    </ul>
                </div>
            </div>
        </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[1]] ?>">
        <div class="detailRight">
            <div id="btitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/playstation-4/call-of-duty-modern-warfare" target="_blank">Note : 80/100</a>
                    <a class="buttonarticle" id="listRight" href="https://www.callofduty.com/fr/modernwarfare/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['FPS']['Call of Duty : Modern Warfare']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[2]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase['FPS']['Battlefield 5']['Image'] ?>" "cover">
        </div>
        <div class="details">
            <div id="btitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['FPS'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Battlefield 5']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['FPS']['Battlefield 5']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['FPS']['Battlefield 5']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Battlefield 5']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/playstation-4/battlefield-v" target="_blank">Note : 73/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://www.ea.com/fr-fr/games/battlefield/battlefield-5/buy" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[3]] ?>">
        <div class="detailRight">
            <div id="btitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Counter Strike : Global Offensive']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/counter-strike-global-offensive" target="_blank">Note : 83/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['FPS']['Counter Strike : Global Offensive']['Image'] ?> " alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[4]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase['FPS']['Star Wars Battlefront 2']['Image'] ?>" "cover">
        </div>
        <div class="details">
            <div id="btitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['FPS'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Star Wars Battlefront 2']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/star-wars-battlefront-ii" target="_blank">Note : 65/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://www.ea.com/games/starwars/battlefront/star-wars-battlefront-2/buy" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[5]] ?>">
        <div class="detailRight">
            <div id="btitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Borderlands 3']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['FPS']['Borderlands 3']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['FPS']['Borderlands 3']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['FPS']['Borderlands 3']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/borderlands-3" target="_blank">Note : 81/100</a>
                    <a class="buttonarticle" id="listRight" href="https://borderlands.com/fr-FR/shop/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['FPS']['Borderlands 3']['Image'] ?> " alt="cover">
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