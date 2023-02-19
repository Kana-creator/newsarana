<?php

$mysqli = new mysqli("localhost", "root", "", "Sarana");
$result = $mysqli->query("SELECT * FROM coment ORDER BY publish ASC");

?>

<h3 style="width: 70%; margin: auto; line-height: 100px; font-size: 44px;">Comments</h3>

<div class="itemlist">
    <?php
    while ($row = $result->fetch_array()) :
    ?>
        <div class="">
            <span style="width: 100%"><?php echo $row['names'] . " " . $row['dates']; ?></span><br>
            <span style="width: 100%"><?php echo $row['comment']; ?></span>
            <hr>
            <?php if ($row['publish'] == 0) : ?>
                <span style="width: 10%"><a href="comments/publishcomment.php?publishcomment=<?php echo $row['id']; ?>" class="userbtn1">Publish</a></span>
            <?php endif; ?>
            <span style="width: 10%"><a href="comments/deletecoment.php?deletecomment=<?php echo $row['id']; ?>" class="userbtn">Delete</a></span>
        </div><br><br>
    <?php endwhile; ?>
</div>


<style>
    #commentslink {
        background: rgb(0, 0, 100, .1);
    }
</style>