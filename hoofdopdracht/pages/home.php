

<?php include "../includes/header.php"; ?>

<?php include "../includes/nav.php"; ?>

<?php 
$apps = $conn->prepare("SELECT * FROM apps");
$apps->execute();
$box_with_apps = $apps->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
    echo "<ul>";
    foreach ($box_with_apps as $apps) {
    echo "<li>" . $apps['title'] . "</li>";
    }
    echo "</ul>";
    ?>
    <div>Er zijn nog geen items toegevoegd.</div>

<?php include "../includes/footer.php"; ?>