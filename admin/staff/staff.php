
<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");
$result = $mysqli->query("SELECT id, lName, fName, responsibility, photo FROM Staff");

?>

<h3 style="width: 70%; margin: auto; line-height: 100px; font-size: 44px;">Staff</h3>

<div class="itemlist">
<?php 
$i = 0;
while($row = $result->fetch_array()):
    $i+=1; 
?>
    <div class="item">
        <span style="width: 2%;"><?php echo $i; ?>.</span>
        <span style="width: 8%;"><img src="../imgs/<?php echo $row['photo'];?>" alt="" class="userimage"></span>
        <span style="width: 40%;"><?php echo $row['lName']." ".$row['fName'];?></span>
        <span style="width: 30%;"><?php echo $row['responsibility'];?></span>
        <span style="width: 10%;"><a href="#staffform" id="editstaff<?php echo $row['id'];?>" class="userbtn1"><i class="fa fa-edit"></i></a></span>
        <span style="width: 10%;"><a href="staff/deletestaff.php?deletestaff=<?php echo $row['id'];?>" class="userbtn"><i class="fa fa-trash"></i></a></span>
    </div>
    <hr>

    <script>
    $(document).ready(function(){
        $("#editstaff<?php echo $row['id'];?>").click(function(){

            $("#savestaffbtn").hide();
            $("#editstaffbtn").show();
            $("#staffid").val("<?php echo $row['id'];?>");
            $("#addstaffh3").text("Update Staff");


            $("#stafffname").val("<?php echo $row['fName'];?>");
            $("#stafflname").val("<?php echo $row['lName'];?>");
            $("#staffresponsibility").val("<?php echo $row['responsibility'];?>");
        });
    });
    </script>
<?php endwhile; ?>
</div>

<form id="staffform" action="staff/addstaff.php"  method="post" class="userform" enctype="multipart/form-data">
<h3 style="width: 100%;" id="addstaffh3">Add Staff</h3>

<input type="hidden" name="id" id="staffid">
    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="staffphoto" id="staffphoto">
    </div>
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="stafffname" id="stafffname">
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input type="text" name="stafflname" id="stafflname">
    </div>
    <div class="form-group">
        <label>Responsibility</label>
        <input type="text" name="staffresponsibility" id="staffresponsibility">
    </div>
    <p style="width: 100%; color: red; margin: 0; padding-top: 30px;">
    <?php

    if(isset($_GET['staff'])){
        echo $_GET['staff'];
    }

    ?>
    </p>

    <div class="actiondiv">
        <input type="submit" style="display: none;" value="Update Staff" name="editstaff" class="saveuser" id="editstaffbtn">
        <input type="submit" value="Save Staff" name="savestaff" class="saveuser" id="savestaffbtn">
    </div>
</form>


<style>
#stafflink{
    background: rgb(0,0,100,.1);
}
</style>