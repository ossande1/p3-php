<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="title">
        <input type="submit" value="submit">
        <?php
            $title = trim($_POST['title'] ?? '');

            $stmt = $pdo->prepare("INSERT INTO items (title) VALUES (:title)");
            $stmt->execute([
            'title' => $title
            ]);
        ?>
    </form>
</body>
</html>