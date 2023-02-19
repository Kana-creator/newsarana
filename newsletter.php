

<?php
$mysqli = new mysqli("localhost", "root", "", "sarana");

$email = mysqli_real_escape_string($mysqli, $_POST['newsletter_email']);

$result = $mysqli->query("SELECT id FROM Saranascool");
$row = $result->fetch_array();
$sch_id = $row['id'];

if(isset($_POST['newsletter_btn'])){
    if(empty($email)){
        header("location: index.php?exist=Please fill the Email field!");
    }else{
    $test_rst = $mysqli->query("SELECT email FROM newsletter WHERE email='$email'");
    if(mysqli_num_rows($test_rst)>0){
        echo "Email already exists";
        header("location: index.php?exist=Email already exists!");
    }else{
        $mysqli->query("INSERT INTO Newsletter(sch_id, email) VALUES('$sch_id','$email')");
        echo "Subscribed successfully";
        header("location: index.php?exist=Subscribed successfully!");
    }
}
}
?>