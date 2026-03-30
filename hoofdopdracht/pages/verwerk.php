<?php include "../includes/db.php"; ?>

<?php include "../includes/header.php"; ?>

<?php include "../includes/nav.php"; ?>

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

<?php include "../includes/footer.php"; ?>

