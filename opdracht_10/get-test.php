<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label for="title">Titel</label>
    <input id="title" name="title" type="text">
    <button type="submit">Opslaan</button>
    <?php $id = $_GET['title'] ?? '';
    echo $id; ?>
</form>
</body>
</html>