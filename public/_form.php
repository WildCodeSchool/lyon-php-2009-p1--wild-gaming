<?php include_once '../src/function.php';

$theme = "";
$aliasTheme = "";
switch ($_SERVER['PHP_SELF']){
    case('/action.php'):
        $theme = "Action/Aventure";
        $aliasTheme = "action";
        break;
    case('/FPS.php'):
        $theme = "FPS";
        $aliasTheme = "FPS";
        break;
    case('/RPG.php'):
        $theme = "RPG";
        $aliasTheme = "RPG";
        break;
    case('/simulation.php'):
        $theme = "Simulation";
        $aliasTheme = "Simulation";
        break;
    case('/sport.php'):
        $theme = "Sport";
        $aliasTheme = "sport";
        break;
    case('/strategie.php'):
        $theme = "Stratégie";
        $aliasTheme = "strategie";
        break;
    case('/_form.php'):
        $theme = "Simulation";
        $aliasTheme = "FPS";
        break;
    default:
        echo "error theme don't match";
}



$game = $rate = $thanksMessage = $errorGameList = $errorStarRating = "";

if (!empty($_POST) && isset($_POST['btn-contact'])) {
    $game = trim($_POST['game-list']);

    if (empty($game))
        $errorsGameList = 'Required';
    if (!isset($_POST['star_rating']))
        $errorStarRating = "Vous n'avez pas mis de note !";
     else
        $rate = $_POST["star_rating"];


    if ($errorGameList === "" && $errorStarRating === "") {
        $thanksMessage = "Merci d'avoir rempli ce formulaire et mis la note de $rate à $game ";
    }
}

?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">

    <form id="contact" method='post' action="#contact">
        <div class="form-group">
            <label for="game-list">Quel jeu avez-vous testé ?</label>
            <select class="form-control" id="game-list" name="game-list">
                <?php foreach($dataBase[$theme] as $game => $infos) { ?>
                    <option value="<?= $game ?>"><?= $game ?></option>
                <?php } ?>
            </select>
        </div>
        <span class="error"><?= $errorGameList ?></span>
        <div class="star_rating">
            <label for="star_rating">Quelle note lui donneriez-vous ?</label>
            <div class="line_of_stars">
                <input type="checkbox" id="star5" name="star_rating" class="star" value="5">
                <label for="star5" class="star" title="5 stars"></label>
                <input type="checkbox" id="star4" name="star_rating" class="star" value="4">
                <label for="star4" class="star" title="4 stars"></label>
                <input type="checkbox" id="star3" name="star_rating" class="star" value="3">
                <label for="star3" class="star" title="3 stars"></label>
                <input type="checkbox" id="star2" name="star_rating" class="star" value="2">
                <label for="star2" class="star" title="2 stars"></label>
                <input type="checkbox" id="star1" name="star_rating" class="star" value="1">
                <label for="star1" class="star" title="1 stars"></label>
            </div>
        </div>
        <span class="error"><?= $errorStarRating ?></span>
        <div class="comment">
            <label for="comment">Votre message (optionnel) :</label>
            <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
        </div>
            </br>
        <div class="buttonSubmit">
        <button type="submit" class="bttn btn-primary" name="btn-contact">Send</button>
        </div>
        <span id="thanks"><?= $thanksMessage ?></span>
    </form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>







