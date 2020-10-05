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
            <input class="btn" type="button" value="RPG">
            <input class="btn" type="button" value="FPS">
            <input class="btn" type="button" value="Stratégie">
            <input class="btn" type="button" value="Simulation">
            <input class="btn" type="button" value="Action/Aventure">
            <input class="btn" type="button" value="Sport">
        </div>
    </section>
    <?php
    include_once '_footer.php';
    ?>
</main>
</body>
</html>