<?php
session_start();
if (isset($_SESSION['user_id'])) :
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.11.2-web/css/all.css">
        <script src="../js/jquery.js"></script>
        <title>Document</title>
        <style>
            html,
            body {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: "calibri";
                scroll-behavior: smooth;
            }

            .main {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
            }

            .top {
                width: 100%;
                text-align: center;
                background: rgb(0, 0, 100);
                position: fixed;
                z-index: 1;
                color: #fff;
                font-family: cursive;
                letter-spacing: 2px;
                display: flex;
            }

            .top h1 {
                width: 100%;
            }

            .logoffbtn {
                position: absolute;
                top: 20px;
                right: 20px;
            }

            .left {
                width: 20%;
                background: rgb(0, 0, 100, .3);
                height: 87vh;
                position: fixed;
                top: 13vh;
                left: 0;
            }

            .left h3 {
                text-align: center;

            }

            h3 {
                display: flex;
                width: 100%;
                align-items: center;
            }

            .right h3:nth-child(3) {
                display: none;
            }

            h3::before,
            h3:after {
                content: "";
                border: solid;
                height: .1em;
                margin: .2em;
                flex: 1;
                background: red;


            }

            .right {
                width: 80%;
                background: rgb(0, 0, 100, .1);
                margin-left: 20%;
                text-align: center;
                padding-top: 13vh;
                min-height: 87vh;
            }

            .left p {
                padding: 10px 30px;
                cursor: pointer;
                margin: 0;
            }

            .left p:hover {
                background: rgb(0, 0, 100, .1);
            }

            #eventslink.active {
                color: red;
                background: rgb(0, 0, 100, .1);
            }

            h3 {
                font-size: 25px;
            }

            .itemlist {
                text-align: left;
                width: 70%;
                margin: auto;
            }

            .item {
                width: 98%;
                padding: 1% 1%;
                display: flex;
                flex-wrap: wrap;

            }

            .item:hover {
                background: rgb(0, 0, 100, .1);

                transition: .3s;
            }

            .userimage {
                width: 30px;
                height: 30px;
            }

            .userbtn {
                text-decoration: none;
                color: #fff;
                background: rgb(100, 0, 0);
                padding: 5px 10px;
                border-radius: 2px;
            }

            .userbtn1 {
                text-decoration: none;
                color: #fff;
                background: rgb(0, 100, 100);
                padding: 5px 10px;
                border-radius: 2px;
                cursor: pointer;
            }

            .userform {
                width: 70%;
                margin: auto;
                padding: 40px 0;
                display: flex;
                flex-wrap: wrap;
                background: rgb(0, 0, 100, .1);
                margin-top: 20px;
            }

            .form-group {
                width: 50%;
            }

            .form-group input,
            .form-group select {
                width: 90%;
                margin: auto;
                height: 35px;
                border-bottom: solid blue 5px;
                outline: none;
                border-left: none;
                border-right: none;
                border-top: none;
                border-radius: 10px;
                text-align: center;
            }

            .form-group label {
                line-height: 40px;
                text-align: left;
                width: 90%;
                margin: auto;
                height: 25px;
            }

            .dashbordlink {
                text-decoration: none;
                color: rgb(0, 0, 40);
            }

            .actiondiv {
                width: 100%;
                padding-top: 50px;
            }

            .saveuser {
                background: rgb(0, 0, 100);
                color: #fff;
                outline: none;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <div class="main">
            <div class="top">
                <h1>New Sarana Nursery and Primary School</h1>
                <a href="logout.php?logout" class="userbtn1 logoffbtn">Log off</a>
            </div>

            <div class="left">
                <h3>DashBoard</h3>

                <p id="userslink"><a href="home.php?users" class="dashbordlink">Users</a></p>
                <p id="stafflink"><a href="home.php?staff" class="dashbordlink">Staff</a></p>
                <p id="eventslink"><a href="home.php?events" class="dashbordlink">Events</a></p>
                <p id="commentslink"><a href="home.php?comments" class="dashbordlink">Comments</a></p>
            </div>

            <div class="right">
                <?php
                if (isset($_GET['users'])) {
                    include 'user/user.php';
                } else if (isset($_GET['events'])) {
                    include 'event/events.php';
                } else if (isset($_GET['staff'])) {
                    include 'staff/staff.php';
                } else if (isset($_GET['comments'])) {
                    include 'comments/comments.php';
                } else {
                    include 'user/user.php';
                }
                ?>
            </div>

        </div>


    </body>

    </html>
<?php
else :
    header("Location: ./index.php");
endif;

?>