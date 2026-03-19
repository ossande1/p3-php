<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verwerk</title>
</head>
<body>
    <h1>Item succesvol ontvangen</h1>

    <?php 
        $title = $_POST['naam'] ?? '';
        if (isset($_POST['naam'])) {
        echo "Titel: $title <br>";    
        };

        $cat = $_POST['cat'] ?? '';
        if (isset($_POST['cat'])) {
        echo "Categorie: $cat <br>";    
        };

        $date = $_POST['date'] ?? '';
        if (isset($_POST['date'])) {
        echo "Datum: $date <br>";    
        };
    ?>
</body>
</html>