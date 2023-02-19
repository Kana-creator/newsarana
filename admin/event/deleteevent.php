

<?php

$mysqli = new mysqli("localhost", "root", "", "Sarana");

if(isset($_GET['deleteevent'])){
    $id = $_GET['deleteevent'];
    $mysqli->query("DELETE FROM sch_event WHERE id = $id");

    header("location: .././home.php?events=Event deleted successfully!");
}
?>