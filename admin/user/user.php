<?php

$mysqli = new mysqli("localhost", "root", "", "sarana");
$result = $mysqli->query("SELECT * FROM User");
?>

<h3 style="width: 70%; margin: auto; line-height: 100px; font-size: 44px;">Users</h3>

        <div class="itemlist">
        <?php 
        $i = 0;
        while($row = $result->fetch_array()): 
            $i+=1;
        ?>
            <div class="item">
                <span style="width: 2%"><?php echo $i; ?>.</span>
                <span style="width: 40%"><?php echo $row['fName']." ".$row['lName']; ?></span>
                <span style="width: 35%"><?php echo $row['responsibility'];?></span>
                <span style="width: 10%"><a href="#userform" class="userbtn1" id="edituser<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a></span>
                <span style="width: 10%"><a href="user/deleteuser.php?deleteuser=<?php echo $row['id'];?>" class="userbtn"><i class="fa fa-trash"></i></a></span>
            </div><hr>
            <script>
    $(document).ready(function(){
        $("#edituser<?php echo $row['id'];?>").click(function(){

            $("#adduserh3").text("Update User");

            $("#userid").val("<?php echo $row['id'];?>");
            $("#fname").val("<?php echo $row['fName'];?>");
            $("#lname").val("<?php echo $row['lName'];?>");
            $("#responsibility").val("<?php echo $row['responsibility'];?>");

            $("#saveuser").hide();
            $("#updateuser").show();

        });
    });
</script>
        <?php endwhile; ?>
        </div>

        <form id="userform" action="user/adduser.php" method="post" class="userform">
        <h3 style="width: 100%;" id="adduserh3">Add User</h3>
        <input type="hidden" name="userid" id="userid">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="fname" id="fname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label>Last name</label>
                <input type="text" name="lname" id="lname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label>Responsibility</label>
                <select name="responsibility" id="responsibility">
                <option value="">Choose responsibility</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pasword" id="password" placeholder="Password">
            </div>

            <p style="width: 100%; color: red; margin-bottom: 0;">
            <?php
            if(isset($_GET['user'])){
                if($_GET['user'] == "saved"){
                    echo "User Saved Successfully <i class='fa fa-check'></i>";
                }else if($_GET['user'] == "deleted"){
                    echo "User Deleted Successfully";
                }else if($_GET['user'] == "edited"){
                    echo "User Updated Successfully";
                }else if($_GET['user'] == "emptyedit"){
                    echo "Please Fill All The Feilds";
                }else if($_GET['user'] == "emptysave"){                    
                    echo "Please Fill All The Feilds";
                }
            }
            ?>
            </p>

            <div class="actiondiv">
                <input type="submit" value="Save User" name="saveuser" class="saveuser" id="saveuser">
                <input type="submit" value="Update User" name="edituser" class="saveuser" id="updateuser"  style="display: none">
            </div>

        </form>

        <style>
#userslink{
    background: rgb(0,0,100,.1);
}
</style>

