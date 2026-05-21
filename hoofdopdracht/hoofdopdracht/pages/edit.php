<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_app";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Database connectie gelukt!";
} catch(PDOException $e) {
  echo "Database connectie mislukt." . $e->getMessage();
}

$id = $_GET['id'] ?? '';
echo $id;

$stmt = $conn->prepare("SELECT * FROM apps WHERE id = ?");
$stmt->execute([$id]);

$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Titel(verplicht)</h3>
    <input id="naam" name="naam" type="text" value="<?= $item['titel'] ?>" min="3" max="50" required>
    <small id="counter">0/50</small> <br>
    <h3>Categorie</h3>
    <input id="cat" name="cat" type="text"> <br>
    <h3>Date</h3>
    <input id="date" name="date" type="number"> <br>
    <button type="submit">Opslaan</button>
</body>
</html>