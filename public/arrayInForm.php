<?php include_once '../src/function.php';

$theme = "";
$aliasTheme "";
echo ($_SERVER['PHP_SELF']);
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
        $theme = "simulation"
        $aliasTheme = "simulation";
        break;
    case('/sport.php'):
        $theme = "sport";
        $aliasTheme = "sport";
        break;
    case('/strategie.php'):
        $theme = "strategie";
        $aliasTheme = "strategie";
        break;
    case('/arrayInForm.php'):
        $theme = "FPS";
        $aliasTheme = "FPS";
        break;
    default:
        echo "error theme don't match";
}


        ?>

<form action="">
        <label for="<?= $aliasTheme ?>gamelist">What game did you play?</label>
        <select id="<?= $aliasTheme ?>gamelist" name="<?= $aliasTheme ?>gamelist">
            <?php foreach($dataBase[$theme] as $game => $infos) { ?>
            <option value="<?= $game ?>"><?= $game ?></option>
            <?php } ?>
        </select>

        <label for="<?= $aliasTheme ?>rating">How would you rate it?</label>
        <select id="<?= $aliasTheme ?>rating" name="<?= $aliasTheme ?>rating">
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

