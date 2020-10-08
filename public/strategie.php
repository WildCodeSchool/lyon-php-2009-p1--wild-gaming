<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<body class="strategiePage">

    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php' ?>
    <!-- Code HEADER -->

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
        <a href="#ftitle1"><img src="assets/img/carouselpics/strat/coh.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[0] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ftitle2"><img src="assets/img/carouselpics/strat/sta.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[1] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ftitle3"><img src="assets/img/carouselpics/strat/age.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[2] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ftitle4"><img src="assets/img/carouselpics/strat/war.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[3] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ftitle5"><img src="assets/img/carouselpics/strat/wah.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[4] ?>" style="width:100%"></a>
    </div>

    <div class="gameSlides fade">
        <a href="#ftitle6"><img src="assets/img/carouselpics/strat/stw.jpg" alt =" <?= array_keys($dataBase['Stratégie'])[5] ?>" style="width:100%"></a>
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
    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[0]] ?>">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Stratégie']['Company of Heroes 2']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="ftitle1">
            <div id="title">
                <h3><?= array_keys($dataBase['Stratégie'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Company of Heroes 2']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Stratégie']['Company of Heroes 2']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Stratégie']['Company of Heroes 2']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Stratégie']['Company of Heroes 2']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/company-of-heroes-2" target="_blank">Note : 80/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/agecheck/app/231430/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[1]] ?>">
        <div class="detailRight">
            <div id="ftitle2">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Stratégie']['Starcraft 2 : Wings of Liberty']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/starcraft-ii-wings-of-liberty" target="_blank">Note : 93/100</a>
                    <a class="buttonarticle" id="listRight" href="https://starcraft2.com/en-us/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Stratégie']['Starcraft 2 : Wings of Liberty']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[2]] ?>">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Stratégie']['Age of Empire 2 : Definitive Edition']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="ftitle3">
            <div id="title">
                <h3><?= array_keys($dataBase['Stratégie'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft"><b>Studio :</b> <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Studio'] ?> </li>
                    <li id="listLeft"><b>PEGI :</b> <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['PEGI'] ?></li>
                    <p id="listLeft"><b>Synopsis :</b> <?= ($dataBase)['Stratégie']['Age of Empire 2 : Definitive Edition']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/age-of-empires-ii-definitive-edition" target="_blank">Note : 84/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/813780/Age_of_Empires_II_Definitive_Edition/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[3]] ?>">
        <div class="detailRight">
            <div id="ftitle4">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight"><b>Studio :</b> <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Studio'] ?></li>
                    <li id="listRight"><b>PEGI :</b> <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['PEGI'] ?></li>
                    <p id="listRight"><b>Synopsis :</b> <?= ($dataBase)['Stratégie']['Warcraft 3 : Reforged']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/warcraft-iii-reforged" target="_blank">Note : 59/100</a>
                    <a class="buttonarticle" id="listRight" href="https://eu.shop.battle.net/en-us/product/warcraft-iii-reforged?blzcmp=blizzard_hp_WarcraftIII:Reforged_card" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Stratégie']['Warcraft 3 : Reforged']['Image'] ?>" alt="cover">
        </div>
    </div>

    <div class="gridLeft <?= $arrayChangeColors[array_keys($dataBase[$theme])[4]] ?>">
        <div class="cover">
            <img id="cover1" src="<?= $dataBase['Stratégie']['Total War : Warhammer 2']['Image'] ?>" alt="cover">
        </div>
        <div class="details">
            <div id="ftitle5">
            <div id="title">
                <h3><?= array_keys($dataBase['Stratégie'])[4]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Total War : Warhammer 2']['Release'] . ")" ?></span></h3>
            </div></div>
            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['Stratégie']['Total War : Warhammer 2']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listLeft" href="https://www.metacritic.com/game/pc/total-war-warhammer-ii" target="_blank">Note : 87/100</a>
                    <a class="buttonarticle" id="listLeft" href="https://store.steampowered.com/app/594570/Total_War_WARHAMMER_II/" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight <?= $arrayChangeColors[array_keys($dataBase[$theme])[5]] ?>">
        <div class="detailRight">
            <div id="ftitle6">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['Stratégie'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['Stratégie']['Star Wars : Empire at War']['Release'] . ")" ?></h3>
            </div></div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['Stratégie']['Star Wars : Empire at War']['Synopsis'] ?></p>
                    <a class="buttonarticle" id="listRight" href="https://www.metacritic.com/game/pc/star-wars-empire-at-war" target="_blank">Note : 79/100</a>
                    <a class="buttonarticle" id="listRight" href="https://store.steampowered.com/app/32470/STAR_WARS_Empire_at_War__Gold_Pack/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="<?= $dataBase['Stratégie']['Star Wars : Empire at War']['Image'] ?>" alt="cover">
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
