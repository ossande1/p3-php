<?php include "../includes/db.php"; ?>

<?php
$apps = $conn->prepare("SELECT * FROM apps");
$apps->execute();
$box_with_apps = $apps->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$id = $_GET['id'] ?? '';

$stmt = $conn->prepare("
    DELETE FROM titel
    WHERE id = ?
");

$stmt->execute([$id]);

header('Location: index.php');
exit;
?>