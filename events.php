

<?php 
include 'inc/header.php'; 
$result = $mysqli->query("SELECT * FROM sch_event");
?>

<style>
.eventsmain{
    width: 100%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    background-color: #fff;
    justify-content: center;
}


.eventschild{
    width: 24%;
    height: 300px;
    border: 6px solid #fff;
    overflow: hidden;
}

.eventschild.zoom{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: -7%;
    left: 0;
    z-index: 1;
    border: none;
    transition: .5s;
    transform: rotate(360deg);
}

.closezoom{
    position: fixed;
    background-color: #000;
    color: #fff;
    border-radius: 50%;
    top: 0;
    left: 95%;
    text-align: center;
    justify-content: center;
    padding: 20px;
    z-index: 10000;
    cursor: pointer;
    font-size: 150%;
    display: none;
}

.eventimg{
    width: 100%;
    height: 100%;
    z-index: -1;
}


.eventdetails{
    width: 100%;
    height: 100%;
    color: #fff;
    margin-top: -94%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    transform: scale(1);
    visibility: hidden;
}

.eventdetails.active{
    visibility: visible;
    transition: .5s;
    background-color: rgb(0, 0, 50,.5);
}

.eventname, .eventdate{
    width: 100%;
    text-align: center;
}

.zoombtn{
    border: 1px #fff solid;
    max-height: 1em;
    max-width: 1em;
    padding: 7px;
    border-radius: 50%;
    cursor: pointer;
}

.nav>ul>li>a.events{
            /*background-color: rgb(0%,0%,100%,.6);*/
            border-bottom: 2px solid red;
        }

        .mission{
            margin-left: 100%;
            transition: all 1s;
        }

        .mission.full{
            margin-left: 3%;
        }


        @media(max-width: 991px){
            .eventsmain{ 
            width: 100%;
            display: block;
        }

        .eventschild, .director{
            width: 50%;
        }

        .mission.full{
            margin-left: 0;
        }
        
        }
</style>

<div class="mission">
        <img src="./imgs/picture6.jpg" alt="">
        <div class="sideleft">
            <h1>Events At Sarana</h1>
            <p class="mission_p">
            To provide quality child care services to the ever expanding residential 
            area in jinja, individualized education that addresses pupil’s unique learning 
            styles and a joyful learning environment that empowers children to reach their 
            educational and personal potential while nurturing their self-confidence and 
            self- esteem.
            </p>
        </div>
    </div>

    <div class="eventsmain">
    <p class="closezoom">X</p>
        <?php 
        while ($row = $result->fetch_array()):
            $i = $row['id'];
            ?>
        <div style="margin: 3% 0" class="eventschild person eventschild<?php echo $i; ?>">
            <img src="imgs/<?php echo $row['photo'];?>" alt="" class="eventimg">
            <div class="eventdetails eventdetails<?php echo $i; ?>">
                <h3 class="eventname"><?php echo $row['eventDescription']; ?></h3>
                <p class="eventdate"><?php echo $row['eventDate'];?></p>
                <p class="zoombtn zoombtn<?php echo $i; ?>"><i class="fa fa-search"></i></p>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $(".eventschild<?php echo $i; ?>").mouseover(function(){
                    $(".eventdetails<?php echo $i; ?>").addClass("active");
                })

                $(".eventschild<?php echo $i; ?>").mouseout(function(){
                    $(".eventdetails<?php echo $i; ?>").removeClass("active");
                })

                $(".zoombtn<?php echo $i; ?>").click(function(){
                    $(".eventschild<?php echo $i; ?>").addClass("zoom");
                    $(".nav").removeClass("sticky")
                    $(".closezoom").show();
                    $("body").css("overflow","hidden")
                })

                $(".closezoom").click(function(){
                    $(".eventschild<?php echo $i; ?>").removeClass("zoom");
                    $(".nav").addClass("sticky")
                    $(this).hide();
                    $("body").css("overflow","auto")
                })

            $(".mission").addClass("full");
               

            })
        </script>
        <?php endwhile; ?>
    </div>



<?php include 'inc/footer.php'; ?>