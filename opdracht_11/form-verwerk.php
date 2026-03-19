<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input id="naam" name="naam" type="text">
        <button type="submit">Opslaan</button>
    </form>
    <?php $title = $_POST['naam'] ?? '';
        if (isset($_POST['naam'])) {
        echo "Vul het eerst in!";    
        } else {    
        echo $title;
        }
    ?>
    
</body>
</html>