<?php

if (isset($_POST['loginbtn'])) {
    $mysqli = new mysqli("localhost", "root", "", "sarana");
    session_start();

    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    $result = $mysqli->query("SELECT * FROM User WHERE responsibility='$username' AND 
    responsibility='$password'");

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_array();
        $_SESSION['user_id'] = $row['id'];
        header("Location: home.php");
    } else {
        header("Location: index.php");
    }
}
