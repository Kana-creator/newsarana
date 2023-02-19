

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.11.2-web/css/all.css">
    <title>Document</title>

    <style>
    html, body{
        padding: 0;
        margin: 0;
        font-family: "calibri";
    }

    body{
        background: url("../imgs/picture1.png");
        background-size: 100%, 100%;
    }

    .main{
        width: 100%;
        height: 100vh;
        background: rgb(0, 0, 100, .2);
        position: absolute;
    }

    h1{
        font-size: 74px;
        width: 40%;
        text-align: center;
        color: #fff;
        padding: 0;
        margin: 0;
        font-family: "forte";
        font-weight: 100;
    }

    form{
        width: 20%;
        position: absolute;
        top: 50%;
        left: 60%;
        transform: translate(-50%, -50%);
        background: rgb(0, 0, 0, .5);
        padding: 40px;
        text-align: center;
    }

    form>i, input{
        width: 100%;
        text-align: center;
    }

    i{
        color: white;
    }

    input{
        line-height: 30px;
        margin: 10px 0;
    }

    #loginbtn{
        width: 40%;
        margin: auto;
        background: blue;
        padding: 3px;
        color: white;
        border-radius: 5px;
        outline: none;
        border: none;
        cursor: pointer;
        font-size: 20px;
        font-family: "forte";
    }
    </style>

</head>
<body>

<div class="main">
<h1>New Sarana Nursery And Primary School</h1>
<form action="login.php" method="post">
<i class="fa fa-user fa-6x"></i>
<input type="text" name="username" id="" placeholder="UserName">
<input type="password" name="password" id="" placeholder="Password">
<input type="submit" name="loginbtn" value="Login" id="loginbtn">
</form>
</div>

<?php

$password = "1234";
$password1 = password_hash($password, PASSWORD_DEFAULT, ['cost' => 11]);
echo $password1;

?>


</body>
</html>