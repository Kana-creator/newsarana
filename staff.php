<?php 
include 'inc/header.php'; 

$result = $mysqli->query("SELECT * FROM Staff");
?>

<style>
.staffmain{
width: 100%;
display: flex;
flex-wrap: wrap;
justify-content: center;
}

.staffchild.director{
    background: #fff;
    width: 250px;
    height: 250px;
    margin: 1%;
    border-radius: 50%;
    padding: 10px;
    border: #e8781d 3px solid;
    overflow: hidden;
}

.staffchild{
    background: #fff;
    width: 180px;
    height: 180px;
    margin: 1%;
    border-radius: 50%;
    border: #e8781d 3px solid;
    overflow: hidden;
    padding: 5px;
}

.staffchild img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.staffchild img:hover{
    transform: scale(1.3);
    transition: .5s;
}

.staffdetails{
    width: 100%;
    height: 100%;
    background: rgb(0, 0, 50,0);
    position: relative;
    z-index: 1000;
    border-radius: 50%;
    transform: scale(1.1);
    padding: 1%;
    padding-top: 20%;
    margin-top: -100%;
}

.staffdetails.active{
    transition: .5s;
    background: rgb(0, 0, 50,.5);
}

.staffdetails>p{
    width: 100%;
    text-align: center;
}

.staffdetails>.staffdetailschild>p>a{
    background: #e8781d;
    color: #fff;
    padding: 3px;
    text-decoration: none;
    border-radius: 7px;
}

.staffdetailschild{
    width: 100%;
    height: 100%;
    text-align: center;
    font-size: 95%;
    text-transform: uppercase;
    color: rgb(0, 0, 50,.0);

}

.staffdetailschild.active{
    color: #fff;
    transition: .5s;
}

.staffbtn{
    display: none;
    transition: 1s;
}

.staffbtn.active{
    display: block;
    transition: 1s;
}

.staffdetailschild p{
    font: 10pt 'calibri';
}

.nav>ul>li>a.staff{
            /*background-color: rgb(0%,0%,100%,.6);*/
            border-bottom: 3px solid red;
        }

        .mission{
            margin-left: 100%;
            transition: all 1s;
        }

        .mission.full{
            margin-left: 3%;
        }

        @media(max-width: 991px){

        .person, .director{
            margin-top: 30px;
        }

        .mission.full{
            margin-left: 0;
            padding: 0;
            margin-bottom: 100px;
        }

        .staffchild.director, .staffdetails{
            width: 100%;
            border-radius: 0;
            border: none;
        }

        .staffchild.director.person{
            height: 350px;
        }
        }
</style>


<div class="mission">
        <img src="./imgs/picture5.jpg" alt="">
        <div class="sideleft">
            <h1>Sarana Staff</h1>
            <p class="mission_p">
            To provide quality child care services to the ever expanding residential 
            area in jinja, individualized education that addresses pupil’s unique learning 
            styles and a joyful learning environment that empowers children to reach their 
            educational and personal potential while nurturing their self-confidence and 
            self- esteem.
            </p>

            
        </div>
    </div>


    <div class="staffmain">
    <div class="staffchild director person" style="margin-top: -30px;">
            <img src="imgs/picture7.jpg" alt="">
            <div class="staffdetails">
            </div>
        </div>
        <?php 
        $i = 0;
        while ($row=$result->fetch_array()): 
            $i+=1;
        ?>
        <div class="staffchild director person staffchild<?php $i;?>">
            <img src="imgs/<?php echo $row['photo'];?>" alt="" class="staffimg staffimg<?php echo $row['id'];?>">
            <div class="staffdetails staffdetails<?php echo $row['id'];?>">
            <div class="staffdetailschild staffdetailschild<?php echo $row['id'];?>">
                <p><?php echo $row['lName']." ".$row['fName'];?></p>
                <p><?php echo $row['responsibility'];?></p>
                <p><a href="" class="staffbtn staffbtn<?php echo $row['id'];?>">read more</a></p>
            </div>
            </div>
        </div>

        <script>
        $(document).ready(function(){
            
            $(".staffdetails<?php echo $row['id'];?>").mouseover(function(){
                $(".staffdetails<?php echo $row['id'];?>").addClass("active");
                $(".staffdetailschild<?php echo $row['id'];?>").addClass("active");
                $(".staffbtn<?php echo $row['id'];?>").addClass("active");
            })

            $(".staffdetails<?php echo $row['id'];?>").mouseout(function(){
                $(".staffdetails<?php echo $row['id'];?>").removeClass("active");
                $(".staffdetailschild<?php echo $row['id'];?>").removeClass("active");
                $(".staffbtn<?php echo $row['id'];?>").removeClass("active");
            })

            $(".staffdetailschild<?php echo $row['id'];?>").mouseover(function(){
                this.removeClass("active")
            });


            
        })
    </script>
        <?php endwhile; ?>
    </div>


    



<?php include 'inc/footer.php'; ?>