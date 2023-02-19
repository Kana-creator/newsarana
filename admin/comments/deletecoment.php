<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");
$id = $_GET['deletecomment'];

if(isset($_GET['deletecomment'])){
    $mysqli->query("DELETE FROM coment WHERE id = $id");

    header("Location: ../home.php?comments");
}

?>