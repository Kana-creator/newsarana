

<?php 

$mysqli = new mysqli("localhost", "root", "", "Sarana");
$result = $mysqli->query("SELECT * FROM sch_event");

?>

<h3 style="width: 70%; margin: auto; line-height: 100px; font-size: 44px;">Events</h3>

<div class="itemlist">
<?php
$i = 0;
 while($row = $result->fetch_array()):
    $i = $i+1;
 ?>
    <div class="item">
        <span style="width: 2%"><?php echo $i; ?>.</span>
        <span style="width: 5%"><img src="../imgs/<?php echo $row['photo'];?>" alt="" class="userimage"></span>
        <span style="width: 42%"><?php echo $row['eventDescription']; ?></span>
        <span style="width: 31%"><?php echo $row['eventDate']; ?></span>
        <span style="width: 10%"><a href="#eventform" class="userbtn1" id="editevent<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a></span>
        <span style="width: 10%"><a href="event/deleteevent.php?deleteevent=<?php echo $row['id']; ?>" class="userbtn"><i class="fa fa-trash"></i></a></span>
    </div>
    <hr>

    <script>
    $(document).ready(function(){
        $("#editevent<?php echo $row['id'];?>").click(function(){
            $("#addeventh3").text("Update Event");
            $("#eventdescription").val("<?php echo $row['eventDescription'];?>");
            $("#eventdate").val("<?php echo $row['eventDate'];?>");
            $("#eventid").val("<?php echo $row['id'];?>");

            $("#editevent").show();
            $("#saveevent").hide();
        });
    });
    </script>
<?php endwhile; ?>
</div>

<form id="eventform" action="event/addevent.php" class="userform" method="post" enctype="multipart/form-data">
<h3 style="width: 100%;" id="addeventh3">Add Event</h3>
<input type="hidden" name="id" id="eventid">
    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="eventphoto">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="eventdescription" id="eventdescription">
    </div>
    <div class="form-group">
        <label>Event Date </label>
        <input type="date" name="eventdate" id="eventdate">
    </div>

    <p style="color: red; width: 100%; margin-bottom: 0; padding-top: 20px;">
    <?php
    echo $_GET['events'];
    ?>
    </p>

    <div class="actiondiv">
        <input style="display: none;" type="submit" id="editevent" value="Update Event" name="editevent" class="saveuser">
        <input type="submit" id="saveevent" value="Save Event" name="saveEvent" class="saveuser">
    </div>
</form>

<style>
#eventslink{
    background: rgb(0,0,100,.1);
}
</style>