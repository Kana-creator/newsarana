


<?php

$mysqli = new mysqli("localhost", "root", "", "Sarana");



if(isset($_POST['saveEvent'])){
    $result = $mysqli->query("SELECT id FROM Saranascool LIMIT 1");
    $row = $result->fetch_array();

    $sch_id = $row['id'];
    $description = mysqli_real_escape_string($mysqli, $_POST['eventdescription']);
    $eventdate = mysqli_real_escape_string($mysqli, $_POST['eventdate']);
    $photo = $_FILES['eventphoto']['name'];
    $target ="../../imgs/".basename($photo);

    if(!empty($description) AND !empty($eventdate) AND !empty($photo)){

        $mysqli->query("INSERT INTO sch_event(sch_id, eventdescription, eventDate, photo) 
        VALUES('$sch_id', '$description', '$eventdate', '$photo')");
        move_uploaded_file($_FILES['eventphoto']['tmp_name'], $target);
        header("location: .././home.php?events=Event saved successfully!");
    }else{
        header("location: .././home.php?events=Please fill all the fields!");
    }
}

if (isset($_POST['editevent'])) {
    $id=$_POST['id'];
    $description = mysqli_real_escape_string($mysqli, $_POST['eventdescription']);
    $eventdate = mysqli_real_escape_string($mysqli, $_POST['eventdate']);
    $photo = $_FILES['eventphoto']['name'];
    $target ="../../imgs/".basename($photo);

    if(!empty($photo) AND !empty($description) AND !empty($eventdate)){
        $mysqli->query("UPDATE sch_event SET eventDate='".$_POST['eventdate']."',
        eventDescription='".$_POST['eventdescription']."', photo='$photo' 
        WHERE id=$id");
        move_uploaded_file($_FILES['eventphoto']['tmp_name'], $target);
        header("location: .././home.php?events=Event updated successfully!");

    }elseif(!empty($description) AND !empty($eventdate)){
    $mysqli->query("UPDATE sch_event SET eventDate='".$_POST['eventdate']."',
     eventDescription='".$_POST['eventdescription']."' 
    WHERE id=$id");
        header("location: .././home.php?events=Event updated successfully!");
    }else{
        header("location: .././home.php?events=Input event description and date!");
    }
    }
 

?>