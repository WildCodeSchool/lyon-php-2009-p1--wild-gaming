
<?php

$titles = [
    '/RPG.php' => 'Les RPG',
    '/FPS.php' => 'Les FPS',
    '/action.php' => 'Les jeux d\'action',
    '/strategie.php' => 'Les jeux de stratégie',
    '/sport.php' => 'Les jeux de sport',
    '/simulation.php' => 'Les simulations'
];

?>


<!DOCTYPE html>
  <head>
    <title><?= $titles[$_SERVER['PHP_SELF']]?></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <header class="sidepage">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-md navbar-light" id="navbar">
            <img class="navbar-brand" src="assets/img/blackwhitelogo.png" alt="logo"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <li class="nav-item"><a class="nav-link " href="index.php">Homepage</a></li>
                <li class="nav-item"><a class="nav-link " href="RPG.php">RPG</a></li>
                <li class="nav-item"><a class="nav-link " href="FPS.php">FPS</a></li>
                <li class="nav-item"><a class="nav-link " href="action.php">Action/Aventure</a></li>
                <li class="nav-item"><a class="nav-link " href="strategie.php">Stratégie</a></li>
                <li class="nav-item"><a class="nav-link " href="sport.php">Sport</a></li>
                <li class="nav-item"><a class="nav-link " href="simulation.php">Simulation</a></li>
              </ul>
            </div>
          </nav>
        </div>
    </header>


