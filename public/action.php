<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>Action - WildGaming</title>
</head>
<body class="actionPage">
<header>
    <!-- Code HEADER -->
</header>

<div class="carousel">
    <!-- Code Carousel -->
</div>

<section class="blocAction">
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

</section>

    <form action="">
        <label for="actionadvgamelist">What game did you play?</label>
        <select id="actionadvgamelist" name="actionadvgamelist">
            <option value="acorigins">Assassin's Creed Origins</option>
            <option value="cyberpunk">Cyberpunk 2077</option>
            <option value="reddead">Red Dead Redemption 2</option>
            <option value="zelda">The Legend of Zelda: Breath of the Wild</option>
            <option value="witcher">The Witcher 3: Wild Hunt</option>
            <option value="uncharted">Uncharted 4: A Thief’s End</option>
        </select>

        <label for="actionadvrating">How would you rate it?</label>
        <select id="actionadvrating" name="actionadvrating">
            <option value="excellent">Excellent!</option>
            <option value="good">Good</option>
            <option value="decent">Decent but not my favorite game</option>
            <option value="disliked">I disliked it</option>
            <option value="hated">To be avoided at all costs!</option>
        </select>

        <label for="comment">Leave a comment (optional)</label>
        <textarea id="comment" name="comment" placeholder="Anything to say?" style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>

<?php

include '_footer.php';
?>