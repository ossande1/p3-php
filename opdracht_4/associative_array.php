<?php

$games = [
    [
        "titel" => "Disco elysium",
        "type" => "Single player",
        "genre" => "RPG",
    ],
    [
        "titel" => "Deadlock",
        "type" => "Multi player",
        "genre" => "Moba",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mijn games</h1>
    <?= $games[0]["titel"]; ?>
    <br>
    <?= $games[1]["titel"]; ?>
</body>
</html>