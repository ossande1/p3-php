<?php include "../includes/db.php"; ?>

<?php 
// $apps = $conn->prepare("SELECT * FROM users");
// $apps->execute();
// $box_with_apps = $apps->fetchAll(PDO::FETCH_ASSOC);
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("
    SELECT * FROM users
    WHERE username = ?
");

$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    echo 'goed';
}else {
    echo 'slecht';
};

// session_start();

// $_SESSION['users'] = $user['username'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h3>User</h3>
        <input type="text" name="username">
        <h3>wachtwoord</h3>
        <input type="password" name="password">
        <input type="submit" value="submit">
        <?php

?>
    </form>
</body>
</html>