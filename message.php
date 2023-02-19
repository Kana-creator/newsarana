<?php
$mysqli = new mysqli("localhost", "root", "", "Sarana");

if (isset($_POST['submit'])) {    
    $sch_result = $mysqli->query("SELECT id FROM saranascool");
    $sch_row = $sch_result->fetch_array();
    $sch_id = $sch_row['id'];
    $name = mysqli_real_escape_string($mysqli, $_POST['names']);
    $comment = mysqli_real_escape_string($mysqli, $_POST['messagebody']);
    $date = date("y-m-d");


    if(!empty($name) AND !empty($comment)){
        $mysqli->query("INSERT INTO coment(sch_id, names, dates, comment, publish) 
        VALUES('$sch_id', '$name', '$date', '$comment',0)");
    }

    header("location: index.php#footer");
}
?>