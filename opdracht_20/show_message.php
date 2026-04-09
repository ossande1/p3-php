<?php
session_start();

if (isset($_SESSION['flash'])) {
    echo "<p>" . $_SESSION['flash'] . "</p>";
    unset($_SESSION['flash']);
}
?>