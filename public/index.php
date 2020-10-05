<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>WildGaming</title>
</head>
<body>
<main>
    <header>
        <picture class="logo">
            <source media="(min-width:1200px)" srcset="assets/img/fullLogo.png" />
            <source media="(min-width:600px)" srcset="assets/img/blackwhitelogo.png" />
            <img src="assets/img/blackwhitelogo.png" alt="Logo" />
        </picture>
    </header>
    <div class="title-homepage">
        <h1>Welcome</h1>
    </div>
    <section>
        <div class="homepage_btn">
            <form action="RPG.php">
                <input class="btn" type="submit" value="RPG">
            </form>
            <form action="FPS.php">
                <input class="btn" type="submit" value="FPS">
            </form>
            <form action="strategie.php">
                <input class="btn" type="submit" value="Stratégie">
            </form>
            <form action="simulation.php">
                <input class="btn" type="submit" value="Simulation">
            </form>
            <form action="action.php">
                <input class="btn" type="submit" value="Action/Aventure">
            </form>
            <form action="sport.php">
                <input class="btn" type="submit" value="Sport">
            </form>
        </div>
    </section>
    <?php
    include_once '_footer.php';
    ?>
</main>
</body>
</html>