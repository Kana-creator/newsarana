<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");
if(isset($_GET['publishcomment'])){
    $id = $_GET['publishcomment'];
    $mysqli->query("UPDATE coment SET publish=1 WHERE id=$id");

    header("Location: ../home.php?comments");
}

?>