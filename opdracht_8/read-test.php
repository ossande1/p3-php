<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database connectie gelukt!";
} catch(PDOException $e) {
  echo "Database connectie mislukt." . $e->getMessage();
}

$games = $conn->prepare("SELECT * FROM games");
$games->execute();
$box_with_games = $games->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<ul>";

    foreach ($box_with_games as $games) {
    echo "<li>" . $games['title'] . "</li>";
}

    echo "</ul>";
    ?>

</body>
</html>