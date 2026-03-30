<?php include "../includes/header.php"; ?>

<?php include "../includes/nav.php"; ?>

<form method="post" action="verwerk.php">

    <h3>Titel(verplicht)</h3>
    <input id="naam" name="naam" type="text" max="50" required>
    <small id="counter">0 / 50</small> <br>
    <h3>Categorie</h3>
    <input id="cat" name="cat" type="text"> <br>
    <h3>Date</h3>
    <input id="date" name="date" type="number"> <br>
    <button type="submit">Opslaan</button>

    <?php 
        $title = $_POST['naam'] ?? '';
        if (isset($_POST['naam'])) {
            echo "Vul het eerst in!";    
        }
        if (strlen($title) < 3) {
                echo "Titel moet minimaal 3 tekens bevatten.";
                exit;
            }else if (strlen($title) > 50) {
                echo "Titel mag maximaal 50 tekens bevatten.";
                exit;
            }else if (empty($title)) {
                echo "Naam is verplicht.";
                exit;
            } else {
                echo "Titel is geldig.";
            }
        ;

        $cat = $_POST['cat'] ?? '';
        if (isset($_POST['cat'])) {
            echo "Vul het eerst in!";     
        };

        $date = $_POST['date'] ?? '';
        if (isset($_POST['date'])) {
            echo "Vul het eerst in!";     
        };
        if (is_numeric($date)){
           echo "Correct ingevoerd";
        } else {
            "Voer een geldig getal in.";
        }
    ?>

</form>

<?php include "../includes/footer.php"; ?>