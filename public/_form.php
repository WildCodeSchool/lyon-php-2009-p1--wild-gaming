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
        $theme = "Strategie";
        $aliasTheme = "strategie";
        break;
    case('/_form.php'):
        $theme = "Simulation";
        $aliasTheme = "FPS";
        break;
    default:
        echo "error theme don't match";
}

 ?>
<!--

<form action="">
    <label for="gamelist">What game did you play?</label>
    <select id="gamelist" name="gamelist">
        <?php foreach($dataBase[$theme] as $game => $infos) { ?>
            <option value="<?= $game ?>"><?= $game ?></option>
        <?php } ?>
    </select>

    <label for="rating">How would you rate it?</label>
    <select id="rating" name="rating">
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

--!>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
<form>
    <div class="form-group">
        <label for="gameList">What game did you play?</label>
        <select class="form-control" id="gameList" name="gameList">
            <?php foreach($dataBase[$theme] as $game => $infos) { ?>
                <option value="<?= $game ?>"><?= $game ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="rating">How would you rate it?</label>
        <select class="form-control" id="rating" name="rating">
            <option value="excellent">Excellent!</option>
            <option value="good">Good</option>
            <option value="decent">Decent but not my favorite game</option>
            <option value="disliked">I disliked it</option>
            <option value="hated">To be avoided at all costs!</option>
        </select>
    </div>
    <div class="comment">
        <label for="comment">Your message (optional)</label>
        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
    </div>
    </br>
    <div>
    <button type="submit" class="bttn btn-primary">Send</button>
    </div>


</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>







