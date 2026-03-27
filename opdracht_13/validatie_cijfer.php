<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name="leeftijd" id="leeftijd">
        <input type="submit" value="submit">
        <?php 
        $age = ['leeftijd'];
        if (is_numeric($age)){
           echo "Correct ingevoerd";
        } else {
            "Voer een geldig getal in.";
        };
    ?>
    </form>
</body>
</html>
