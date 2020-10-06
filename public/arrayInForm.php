<?php include_once '../src/function.php'; ?>



<form action="">
        <label for=" <?php $_SERVEUR['PHP_SELF'] ?>gamelist">What game did you play?</label>
        <select id="<?php $_SERVEUR['PHP_SELF'] ?>gamelist" name="<?php $_SERVEUR['PHP_SELF'] ?>gamelist">
            <?php foreach($dataBase["Action/Aventure"] as $game => $infos) { ?>
            <option value="<?= $game ?>"><?= $game ?></option>
            <?php } ?>
        </select>

        <label for="<?php $_SERVEUR['PHP_SELF'] ?>rating">How would you rate it?</label>
        <select id="<?php $_SERVEUR['PHP_SELF'] ?>rating" name="<?php $_SERVEUR['PHP_SELF'] ?>rating">
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

