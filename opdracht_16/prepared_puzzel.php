<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_app";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database connectie gelukt!";
} catch(PDOException $e) {
  echo "Database connectie mislukt." . $e->getMessage();
}

// 1) Maak connectie met PDO (gebruik je eigen db.php of zet het hier neer)

// 2) Testdata (doe alsof dit uit een formulier komt)
$titel = "Test item";
$omschrijving = "Dit is een test.";

// 3) Prepared statement (vul de placeholders aan)
$sql = "INSERT INTO items (titel, omschrijving) VALUES ( Got, A fantasy series based on the hit book series 'A song of ice and fire' br George R.R. Martin)";
$stmt = $pdo->prepare($sql);

// 4) Uitvoeren met execute (kies 1 manier)
// Manier A: execute met array
$stmt->execute([
    "Got" => $titel,
    "A fantasy series based on the hit book series 'A song of ice and fire' br George R.R. Martin" => $omschrijving
]);

echo "Insert gelukt (als je geen error ziet).";
?>