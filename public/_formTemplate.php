<link rel="stylesheet" href="assets/style/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="POST">
    <div class="already_played">
        <label for="game_played"> A quel jeu de ce theme avez-vous joué ?</label>
        <select name="game_played" id="game_played">
            <option value="game1">nom du jeu 1</option>
            <option value="game2">nom du jeu 2</option>
            <option value="game3">nom du jeu 3</option>
            <option value="game4">nom du jeu 4</option>
            <option value="game5">nom du jeu 5</option>
            <option value="game6">nom du jeu 6</option>
        </select>
    </div>
    <div class="star_rating">
        <label for="Star_Rating"> notez ce jeu : </label>
        <div class="lign_of_stars">
            <input type="checkbox" id="star4" name="Star_Rating" class="star" value="4">
            <label for="star4" class="star" title="4 stars"></label>
            <input type="checkbox" id="star3" name="Star_Rating" class="star" value="3">
            <label for="star3" class="star" title="3 stars"></label>
            <input type="checkbox" id="star2" name="Star_Rating" class="star" value="2">
            <label for="star2" class="star" title="2 stars"></label>
            <input type="checkbox" id="star1" name="Star_Rating" class="star" value="1">
            <label for="star1" class="star" title="1 stars"></label>
        </div>
    </div>
    <div class="text_area">
        <label for="msg">Message:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>