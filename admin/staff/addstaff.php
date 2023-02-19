

<?php
$mysqli = new mysqli("localhost", "root", "", "sarana");

if (isset($_POST['savestaff'])) {

    $fname = mysqli_real_escape_string($mysqli, $_POST['stafffname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['stafflname']);
    $responsibility = mysqli_real_escape_string($mysqli, $_POST['staffresponsibility']);

    $photo = $_FILES['staffphoto']['name'];
    $target = "../../imgs/" . basename($photo);

    $result = $mysqli->query("SELECT id FROM Saranascool");
    $row = $result->fetch_array();
    $sch_id = $row['id'];

    if (!empty($fname) and !empty($lname) and !empty($responsibility) and !empty($photo)) {
        $mysqli->query("INSERT INTO Staff(sch_id, fName, lName, responsibility, photo) 
    VALUES('$sch_id', '$fname', '$lname', '$responsibility', '$photo')");

        move_uploaded_file($_FILES['staffphoto']['tmp_name'], $target);

        header("location: .././home.php?staff=Staff Saved Successfully!");
    } else {
        header("location: .././home.php?staff=Please fill all the fields!");
    }
}



if (isset($_POST['editstaff'])) {

    $id = $_POST['id'];
    $fname = mysqli_real_escape_string($mysqli, $_POST['stafffname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['stafflname']);
    $responsibility = mysqli_real_escape_string($mysqli, $_POST['staffresponsibility']);

    $photo = $_FILES['staffphoto']['name'];
    $target = "../../imgs/" . basename($photo);

    if (empty($photo)) {

        $mysqli->query("UPDATE Staff SET fName='$fname', lName='$lname',
     responsibility='$responsibility' WHERE id=$id");
    } else {
        $result = $mysqli->query("SELECT photo FROM Staff");
        $row = $result->fetch_array();
        unlink("../../imgs/" . $row['photo']);

        $mysqli->query("UPDATE Staff SET fName='$fname', lName='$lname',
     responsibility='$responsibility', photo='$photo' WHERE id=$id");
        move_uploaded_file($_FILES['staffphoto']['tmp_name'], $target);
    }

    header("location: .././home.php?staff=Staff Updated Successfully!");
}



?>