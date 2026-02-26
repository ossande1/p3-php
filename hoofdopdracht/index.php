<?php

// Mijn mini-app wordt een: Film/series tracker

$appNaam = "MovieWall";
$trackerType = "Film/seriestracker";
$tagline = "We are the watchers on the wall!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
</head>
<body>
    <div><h1><span id="greeting">Hoi</span>, welkom bij <?= $appNaam ?></h1> <h6><?= $trackerType ?></h6></div>
    <h2><?= $tagline ?></h2>


    <footer>
        <?= $appNaam, date(" Y")?>
    </footer>   
</body>
</html>