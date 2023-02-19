
<?php include 'inc/header.php'; ?>

<?php 
$mysqli = new mysqli("localhost", "root", "", "Sarana");
$result = $mysqli->query("SELECT schoolName, motto FROM saranaScool");
$row = $result->fetch_array();
?>

<style>
    .main{
            width: 100%;
            margin: auto;
            justify-content: center;
            
        }

        .events>.child{
            background: #fff;
            width: 29%;
            height: 60vh;
            margin: 10% 2%;
            border-radius: 20px;
            box-shadow: 0 0 4px 1px rgb(0,0,20);
            text-align: left;
            transition: all .5s;
            transform: rotate(-45deg);
            padding-bottom: 10%;
        }

    .child>img{
        width: 100%;
        height: 60%;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .child>img:hover{
        transform: scale(1.1);
        transition: all .5s;
    }
    .child>h3{
        text-align: center;
        color: rgb(0,0,50,.7);
    }

    .child>p{
        text-align: justify;
        padding: 0 15px;
    }

    
    div.events{
        width: 100%;
        display: flex;
        flex-flow: wrap;
        padding-bottom: 5%;
    }

    .fixed{
        width: 100%;
        height: 30vh;
        background: url("./imgs/picture4.jpg");
        background-size: 100% 100%;
        background-attachment: fixed;
        transition: all .5s;
    }

    .fixed.waypoint{
        height: 100vh;
    }

    

    

    .newsletter{
        background: #e8781d;
        width: 100%;
        display: flex;
        justify-content: center;
        color: #fff;

    }

    .newsletter>.right{
        display: flex;
        flex-direction: row;
    }

    #newsleterbtn{
        background: rgb(0,0,100);
        outline: none;
        border: none;
        color: #fff;
        margin-left: 5px;
        border-radius: 5px;
        padding:10px;
        letter-spacing: 2px;
        cursor: pointer;
    }

    .newsletter h3{
        text-transform: capitalize;
        font-family: cursive;
        font-size: 25px;
        letter-spacing: 3px;
    }

    .nav>ul>li>a.home{
            /*background-color: rgb(0%,0%,100%,.6);*/
            border-bottom: 2px solid #f00;
        }

        .child.waypoint{
            width: 29%;
            transform: rotate(0deg);
        }

        .mission{
            margin-left: 110%;
            transition: all .5s;
        }

        .mission.waypoint{
            margin-left: 2%;
        }

        @media(max-width: 991px){
            .events{
                display: inline-block;
            }
            .events>.child{
                width: 100%;
                margin: 10% 0;
                transform: rotate(0deg);
                min-height: 100vh;
            }

            .fixed{
                height: 100vh;
            }

            .footer{
                transform: scale(1);
                text-align: center;
                padding: 0;
            }

            .mission{
            margin-left: 2%;
            }

            .newsletter{
                display: block;
            }
            .newsletter>.right{
                display: block;
            }
            .mission{
                display: block;
                padding: 0;
                box-shadow: none;
                width: 98%;
            }

            .mission>h1{
                text-align: center;
                width: 100%;
            }

            .mission>img{
                width: 100%;
                margin: auto;
                padding: 0;
            }

            input, textarea, label{
                width: 90%;
                margin: auto;
            }

            .mission .sideleft{
                width: 100%;
            }

        }

        
    
</style>



<div class="banner">
    <div class="header">
        

        <div class="title">

    <h1 class="schoolname"><?php echo $row['schoolName'];?></h1>
    <h3 class="motto">"<?php echo $row['motto'];?>"</h3>
    </div>

    </div>
</div>


<div class="newsletter">
<p>
<?php if (@$_GET['exist']) {
    echo $_GET['exist'];
}
?>
</p>
    <h3>subscribe to our newsletter</h3>
    <form action='newsletter.php' method="post" class="right">
        <input style="min-width: 300px" type="text" name="newsletter_email" id="newsletteremail" placeholder="Enter Email">
        <input type="submit" name="newsletter_btn" value="Subscribe" id="newsleterbtn">
    </form>
</div>




<div class="main">

    <div class="mission">
        <img src="./imgs/picture1.png" alt="">
        <div class="sideleft">
            <h1>Our Mission</h1>
            <p class="mission_p">
            To provide quality child care services to the ever expanding residential 
            area in jinja, individualized education that addresses pupil’s unique learning 
            styles and a joyful learning environment that empowers children to reach their 
            educational and personal potential while nurturing their self-confidence and 
            self- esteem.
            </p>
        </div>
    </div>

<div class="events">
    
        <div class="child">
        <img src="./imgs/picture3.jpg" alt="">
        <h3>About sarana </h3>
        <p>New Sarana nursery and primary school, Jinja is a very promising school privately 
        founded and owned.
            <a href="about.php">read more</a>
        </p>
        </div>

        <div class="child">
        <img src="./imgs/picture5.jpg" alt="">
        <h3>Our Staff</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, dignissimos.
            <a href="staff.php">read more</a>
        </p>
        </div>

        <div class="child">
        <img src="./imgs/picture6.jpg" alt="">
        <h3>See what happens at sarana</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, dignissimos.
            <a href="events.php">read more</a>
        </p>
        </div>
        
    
</div>
</div>

<div class="fixed"></div>





<?php require_once 'inc/footer.php'; ?>
    
