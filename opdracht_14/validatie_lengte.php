<?php
$titel = "Test";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titel</h1>
    <form action="">
        <input type="text" name="naam" id="naam" require max=50 >
        <input type="submit" value="submit">
        <?php    
            $naam = trim($_GET['naam'] ?? '');
            if (strlen($naam) < 3) {
                echo "Titel moet minimaal 3 tekens bevatten.";
                exit;
            }else if (strlen($naam) > 50) {
                echo "Titel mag maximaal 50 tekens bevatten.";
                exit;
            }else if (empty($naam)) {
                echo "Naam is verplicht.";
                exit;
            } else {
                echo "Titel is geldig.";
            };
        ?>
    </form>
</body>
</html>