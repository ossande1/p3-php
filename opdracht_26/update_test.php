<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input name="title">
    <input type="submit" value="submit">
    <?php
    $title = $_POST['title'] ?? '';
    echo $title;

    $stmt = $conn->prepare("
    UPDATE items 
    SET title = ?
    WHERE id = 2
    ");

    $stmt->execute([$title, $id]);
    ?>
    </form>
</body>
</html>