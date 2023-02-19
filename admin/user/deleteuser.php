

<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");

if (isset($_GET['deleteuser'])) {
    $id = $_GET['deleteuser'];

    $mysqli->query("DELETE FROM User WHERE id=$id");

    header("Location: ../home.php?user=deleted");
}

?>