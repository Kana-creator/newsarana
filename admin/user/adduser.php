

<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");

if (isset($_POST['saveuser'])) {
    $result = $mysqli->query("SELECT id FROM saranascool");
    $row = $result->fetch_array();
    $sch_id = $row['id'];
    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
    $responsibility = mysqli_real_escape_string($mysqli, $_POST['responsibility']);

    if(!empty($fname) AND !empty($lname) AND !empty($responsibility)){

    $mysqli->query("INSERT INTO User(sch_id, fName, lName, responsibility) VALUES(
        '$sch_id', '$fname', '$lname', '$responsibility')");

        header("Location: ../home.php?user=saved");
    }else{        
        header("Location: ../home.php?user=emptysave");
    }
}

if (isset($_POST['edituser'])) {
    $id = $_POST['userid'];

    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
    $responsibility = mysqli_real_escape_string($mysqli, $_POST['responsibility']);

    if(!empty($fname) AND !empty($lname) AND !empty($responsibility)){

    $mysqli->query("UPDATE User SET fName='$fname', lName='$lname', 
    responsibility='$responsibility' WHERE id=$id");

    header("Location: ../home.php?user=edited");

    }else{        
    header("Location: ../home.php?user=emptyedit");
}


}


?>