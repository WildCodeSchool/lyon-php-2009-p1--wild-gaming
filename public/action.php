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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

</head>

<body class="actionPage">
<?php include_once '_headerSidePageResponsive.php' ?>
<!-- Code HEADER -->

<div class="slideshow" id="slide">
        <div class="gameSlides fade">
            <a href="#atitle1"><img src="assets/img/carouselpics/act/ac.jpeg" alt =" <?= array_keys($dataBase['Action/Aventure'])[0] ?>" style="width:100%"></a>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle2"><img src="assets/img/carouselpics/act/cyb.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[1] ?>" style="width:100%"></a>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle3"><img src="assets/img/carouselpics/act/zel.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[2] ?>" style="width:100%"></a>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle4"><img src="assets/img/carouselpics/act/red.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[3] ?>" style="width:100%"></a>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle5"><img src="assets/img/carouselpics/act/wit.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[4] ?>" style="width:100%"></a>
        </div>

        <div class="gameSlides fade">
            <a href="#atitle6"><img src="assets/img/carouselpics/act/unc.jpg" alt =" <?= array_keys($dataBase['Action/Aventure'])[5] ?>" style="width:100%"></a>
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
    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[0]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['Action/Aventure']['Assassin\'s Creed Origins']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="atitle1">
            <div id="title" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['Assassin\'s Creed Origins']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/assassins-creed-origins" target="_blank">Note : 84/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.ubi.com/fr/assassins-creed-origins/592450934e0165f46c8b4568.html" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[1]] ?>">
        <div class="detailRight">
            <div id="atitle2">
            <div id="titleRight" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['Cyberpunk 2077']['Synopsis'] ?></p>
                    <a class="buttonarticle"  id="listRight" href="https://www.metacritic.com/game/pc/cyberpunk-2077" target="_blank">Note : Non noté</a>
                    <a class="buttonarticle"  id="listRight" href="https://www.cyberpunk.net/us/en/pre-order" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['Action/Aventure']['Cyberpunk 2077']['Image'] ?>" alt="cover">
        </div>
    </div>
    <div id="separator"></div>

    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[2]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="atitle3">
            <div id="title" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Release'] . ")" ?></span></h3>
            </div></div>

            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['The Legend of Zelda : Breath of the Wild']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/switch/the-legend-of-zelda-breath-of-the-wild" target="_blank">Note : 97/100</a>
                    <a class="buttonarticle"  id="listLeft" href="https://www.zelda.com/breath-of-the-wild/buy-now/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[3]] ?>">
        <div class="detailRight">
            <div id="atitle4">
            <div id="titleRight" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['Red Dead Redemption 2']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/playstation-4/red-dead-redemption-2" target="_blank">Note : 97/100</a>
                    <a class="buttonarticle"  id="listRight" href="https://www.rockstargames.com/reddeadredemption2/restricted-content/agegate/form?redirect=https%3A%2F%2Fwww.rockstargames.com%2Freddeadredemption2%2Ffr%2Forder&options=&locale=fr_fr" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['Action/Aventure']['Red Dead Redemption 2']['Image'] ?>" alt="cover">
        </div>
    </div>
    <div id="separator"></div>

    <div class="gridLeft <?= $arrayChangeColors[$arrayGames[4]] ?>">
        <div class="cover">
            <img id="cover1" src=" <?= $dataBase ['Action/Aventure']['The Witcher 3 : Wild Hunt']['Image']?>" "cover">
        </div>
        <div class="details">
            <div id="atitle5">
            <div id="title" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Release'] . ")" ?></span></h3>
            </div></div>

            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['The Witcher 3 : Wild Hunt']['Synopsis'] ?></p>
                    <a class="buttonarticle"  id="listLeft" href="https://www.metacritic.com/game/playstation-4/the-witcher-3-wild-hunt" target="_blank">Note : 92/100</a>
                    <a class="buttonarticle"  id="listLeft" href="https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>
    <div id="separator"></div>

    <div class="gridRight <?= $arrayChangeColors[$arrayGames[5]] ?>">
        <div class="detailRight">
            <div id="atitle6">
            <div id="titleRight" >
                <h3><?= array_keys($dataBase['Action/Aventure'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Synopsis'] ?></p>
                    <a class="buttonarticle"  id="listRight" href="https://www.metacritic.com/game/playstation-4/uncharted-4-a-thiefs-end" target="_blank">Note : 93/100</a>
                    <a class="buttonarticle"  id="listRight" href="https://www.playstation.com/fr-fr/games/uncharted-4-a-thiefs-end-ps4/buy-now/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src=" <?= $dataBase['Action/Aventure']['Uncharted 4 : A Thief\'s End']['Image'] ?>" alt="cover">
        </div>
    </div>


</section>

<?php include_once '_form.php'; ?>

<?php include '_footer.php'; ?>

<script type="text/javascript" src="/script.js"></script>

</body>
</html>
