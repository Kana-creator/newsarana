
<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");

if (isset($_GET['deletestaff'])) {
    $id = $_GET['deletestaff'];

    $mysqli->query("DELETE FROM Staff WHERE id=$id");

    header("Location: ../home.php?staff=Staff deleted successfully!");
}

?>