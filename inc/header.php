
<?php 
$mysqli = new mysqli("localhost", "root", "", "Sarana");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
    <script src="js/jquery.js"></script>
    <script src="js/mainjs.js"></script>
    <script src="js/waypoints.min.js"></script>
    <title>Document</title>

    <style>

        body, html{
            padding: 0;
            margin: 0;
            background: #eee;
            font-family: "calibri";
            scroll-behavior: smooth;
            font-size: 110%;
        }

        .logo{
            color: #f00; 
            position: fixed;
            left: 5%;
            line-height: 50px;
            font: 34px "forte";
            border-bottom: 10px solid #fff;
            padding: 0 1%;
            border-radius: 50%;
        }

        .banner{
            width: 100%;
            height: 70vh;
            background: url("./imgs/picture1.jpg");
            background-size: 100% 100%;
            /*border-bottom: 5px solid #e8481d;*/
        }

        .header{
            width: 100%;
            height: 100%;
            background: rgb(0,0,0,.5);
            display: flex;
        }

        .nav{
            width: 100%;
            background: rgb(0,0,50);
            border-bottom: 5px solid #e8781d;
            max-height: 80px;
            margin-top: 0; 
            justify-content: center;                        
        }

        .nav.sticky{
            position: fixed;
            top: 0;
            z-index: 1;
            z-index: 10000;
            transition: 1s;
            background: rgb(0,0,50,.7);
        }

        .nav>ul{
            list-style: none;
            display: flex;
            justify-content: center; 
            margin-left: 50%;

        }

        

        .nav>ul>li{
            padding: 10px;
        }

        .nav>ul>li>a{
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-family: "Calibri";
            padding: 10px;
           /* border-radius: 20px;*/
        }

        .nav>ul>li>a:hover{
            /*background-color: rgb(0%,0%,100%,.6);*/
            border-bottom: 2px solid red;
        }

        .title{
            position: absolute;
            color: #cbe;
            font-family: cursive;
            font-weight: 100;
            text-transform: capitalize;
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .title>.schoolname{
            font-size: 60px;
            text-shadow: #e8781d 5px 0 5px;

        }

        .title>.motto{
            font-style: oblique;
            font-family: "calibri";
            font-size: 2em;
            text-shadow: #e8781d 5px 0 5px;

        }

        input{
            padding: 5px;
        }

        textarea{
            background: #fef;
        }


        .mission{
        width: 95%;
        justify-content: center;
        margin: 5% auto;
        background: #fff;
        padding: 2% 0;
        box-shadow: rgb(0,0,100) 0 0 5px 1px;
        display: flex;
        flex-wrap: wrap;
    }


    .mission>img{
        width: 48%;
        height: 100%;
        padding: 0% 2%;
    }

    .mission>.sideleft{
        width: 48%;
    }

    .mission>.sideleft>h1{
        text-align: center;
        letter-spacing: 5px;
        font-size: 3em;
        font-family: cursive;
        font-weight: 100;
        color: rgb(0,0,100);
    }


    .mission>.sideleft>p{
        text-align: justify;
        padding: 0% 2%;
        font-style: italic;
    }

    label{
        padding-bottom: 5px;
    }

    p, li{
        font-weight: 100;
        font-size: 13pt;
        letter-spacing: 1px;
        word-spacing: 2px;
    }

    .togglebtn{
        display: none;
    }

    @media(max-width: 991px){
        
        .logo{
            color: #f00; 
            position: fixed;
            left: 5%;
            line-height: 50px;
            font: 20px "forte";
            border-bottom: 6px solid #fff;
            padding: 0 1%;
            border-radius: 50%;
        }

        p, li{
            font: 120% "calibri";
            padding-top: 5%;
            text-align: center;
        }
        
        .togglebtn{
            display: block;
            float: right;
            margin-right: 20px;
            padding: 10px;
            color: #fff;
        }
        .nav, .nav.sticky{
            /*max-height: 100vh;*/
            position: fixed;
            z-index: 1;
            width: 100vw;
            top: 0;

        }

        .nav>ul{
            display: block;
            height: 100vh;
            position: fixed;
            width: 100vw;
            background: #000;
            top: -4%;
            left: -120vw;
            margin-left: 0;
        }

        #navul.toggle{
            left: 0;
            transition: all 1s;
            padding: 2% 0;
            text-align: center;
        }

        #navul li a{
            width: 80%;
            text-align: center;
            margin: auto;
        }

        .navlink{
            display: block;
            width: 100%;
            text-align: justify;
        }

        h3{
            text-align: center;
        }

        .banner{
            height: 96vh;
        }

        .title>.schoolname{
            font-size: 40px;
            text-shadow: #e8781d 5px 0 5px;
        }

        .title>.motto{
            font-size: 20px;
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
                margin-top: 80px;
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
                width: 90%;
                margin: auto;
            }

            .mission>.sideleft>p{
                text-align: center;
            }

            #newsleterbtn{
                margin-top: 20px;
            }

    }

        
    </style>
</head>
<body>
<div>
        <nav class="nav">
        <span class="logo">New Sarana</span>

            <ul id="navul">
                <li><a href="index.php" class="home navlink">home</a></li>
                <li><a href="about.php" class="about navlink">about us</a></li>
                <li><a href="staff.php" class="staff navlink">staff</a></li>
                <li><a href="events.php" class="events navlink">events</a></li>
                <li><a href="#footer" class="contact navlink">contact</a></li>
            </ul>
            <span><a href="#" class="shownav"><i class="fa fa-bars togglebtn"></i></a></span>

        </nav>
</div>



<script>
    $(document).ready(function(){
        var navposition = $(".nav").offset().top;
        $(window).scroll(function(){
            var scrollvalue = $(window).scrollTop();
            if (scrollvalue > navposition) {
                $(".nav").addClass("sticky");
            } else {                
                $(".nav").removeClass("sticky");
            }
        })

        $(".mission").addClass("full");

    })
</script>



