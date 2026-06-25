<?php include "../includes/db.php"; ?>

<?php 
// $apps = $conn->prepare("SELECT * FROM user");
// $apps->execute();
// $box_with_apps = $apps->fetchAll(PDO::FETCH_ASSOC);

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $hash = password_hash(
        $password,
        PASSWORD_DEFAULT
        );

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

        $stmt->execute([$username, $hash]);
?>

<?php include "../includes/header.php"; ?>

<?php include "../includes/nav.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <h3>Username</h3>
        <input type="text" name="username">
        
        <h3>Password</h3>
        <input type="password" name="password">

        <input type="submit" value="submit">
        <?php


        // exit;
        ?>
    </form>
</body>
</html>