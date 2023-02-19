<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");
$result = $mysqli->query("SELECT * FROM Coment WHERE publish=1");


?>

<style>
    .footer {
        width: 100%;
        background: rgb(0, 0, 50);
        border-top: 5px solid #e8781d;
        color: #fff;
        transition: all 1s;
    }

    .developer {
        width: 100%;
        background-color: #e8781d;
        justify-content: center;
        color: #fff;
        font-size: 14pt;
        padding: 5% 0;
        margin: auto
    }

    .developer>p {
        width: 100%;
        text-align: center;
    }

    .footermain {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .left,
    .middle,
    .right {
        width: 20%;
        display: flex;
        justify-content: left;
        padding: 2% 2%;
        flex-direction: column;
        text-align: left;
    }

    .middle>p {
        text-align: left;
    }

    .left>p {
        text-align: left;
    }

    .bottom {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 3% 0;
    }

    /*.fab{
        font-size: 3em;
        padding: 20px;
    }*/

    .phone {
        font-size: 12pt;
    }

    .submit {
        width: 30%;
        margin: 10px auto;
        padding: 5px;
        border-radius: 5px;
        color: #fff;
        background: #e8781d;
    }

    .comments {
        width: 100%;
        display: flex;
        flex-flow: wrap;
        padding: 5% 0;
    }

    .comments>.person {
        width: 30%;
        padding: 0 10%;
        display: flex;
    }

    .person>p {
        text-align: left;
    }

    .commenthead {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .commenthead>h1 {
        font-family: cursive;
        font-weight: 10;
        text-transform: capitalize;
        color: rgb(0, 0, 100);

    }

    .messageright {
        padding: 2% 5%;
        width: 85%;
        border-bottom: 5px solid #e8781d;
    }

    .messageright>.name {
        width: 100%;
        text-align: left;
        font-weight: 800;
        color: rgb(0, 0, 100);
        font-size: 1.3rem;
    }

    .messageright>.message {
        width: 100%;
        text-align: justify;
    }

    .initial {
        background: rgb(0, 0, 50);
        font-size: 3em;
        color: #fff;
        padding: 10px;
        width: 15%;
        height: 80px;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
    }

    .footermain>div>h3,
    .footermain>form>h3 {
        border-bottom: #e8781d solid 3px;
        text-align: center;
        font-size: 25px;
        padding-bottom: 15px;
    }

    .person {
        transform: scale(0);
        transition: all 1s;
    }

    .person.waypoint {
        transform: scale(1);
    }



    @media(max-width: 991px) {
        .comments {
            width: 100%;
        }

        .comments>.person,
        .person {
            display: block;
            width: 100%;
            transform: scale(1);
        }

        .person>p {
            text-align: center;
        }

        .initial {
            display: none;
        }

        .footer {
            transform: scale(1);

        }

        .footermain {
            display: block;
            padding: none;
            width: 100%;
            text-align: center;
        }

        .left,
        .middle,
        .right {
            width: 100%;
            display: flex;
            justify-content: left;
            padding: 2% 0%;
            flex-direction: column;
            text-align: center;
        }

        .commenthead h1 {
            text-align: center;
        }


        .footermain>div>h3,
        .footermain>form>h3 {
            border-bottom: #e8781d solid 3px;
            text-align: center;
            font-size: 25px;
            padding-bottom: 15px;
            width: 50%;
            margin: auto;
        }

        .footermain>div,
        .footermain>form {
            margin-bottom: 100px;
        }
    }
</style>


<div class="comments">
    <div class="commenthead">
        <h1>see what people say about new Sarana</h1>
    </div>
    <?php
    while ($row = $result->fetch_array()) :

        $name = $row['names'];
        $name_initial = $name[0];
    ?>
        <div class="person">
            <p class="initial messageleft"><?php echo $name_initial; ?></p>

            <div class="messageright">
                <p class="name"><?php echo $row['names']; ?></p>
                <p class="message"><?php echo $row['comment']; ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<input type="color" name="" id="">


<div class="footer" id="footer">
    <div class="footermain person">
        <div class="left">
            <h3>Contacts</h3>
            <i style="line-height: 40px;" class="fab fa-whatsapp phone"> +256752810116</i>
            <i style="line-height: 40px;" class="fa fa-phone phone">+256752810116</i>
            <i style="line-height: 40px;" class="fa fa-envelope phone"> joshuawaidah@yahoo.com</i>
        </div>
        <div class="middle">
            <h3>Address</h3>
            <i style="line-height: 40px;">Mon-Fri: 7am-5pm</i>
            <i style="line-height: 40px;">Sat: 9am-3pm</i>
            <i style="line-height: 40px;">Sun: Closed</i>
        </div>
        <form action="message.php" method="post" class="right">
            <h3>leave a message</h3>
            <label for="name">Name</label>
            <input type="text" name="names" id="name"><br>
            <label for="message">Message</label>
            <textarea name="messagebody" id="messagebody" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="Submit" class="submit">
        </form>
    </div>

    <div class="bottom">
        <a style="padding: 30px" href="https://www.facebook.com/newsaranaschool" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
        <i style="padding: 30px" class="fab fa-instagram fa-3x"></i>
        <i style="padding: 30px" class="fab fa-twitter fa-3x"></i>
    </div>
</div>

<div class="developer">
    <p>&copy; 2020</p>
    <p>All rights reserved by Anatoli</p>
    <p>akuwebwa@gmail.com</p>
</div>