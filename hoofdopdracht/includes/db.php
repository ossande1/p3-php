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

?>