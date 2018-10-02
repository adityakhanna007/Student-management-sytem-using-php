<?php 
include 'connection.php';
$sql="select * from down";
$res=mysqli_query($con,$sql);


?>
<div id="content"  class="col-sm-9 frame animated fadeInRight jumbotron" >
                <h3 style="text-align:center">Downloads</h3>
    <hr>
   <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <ol>
    <?php
        while($row=mysqli_fetch_assoc($res))
        {
            ?>
            <br>
        <li>
        <h4><a href="download.php?name=uploads/<?php echo $row['file'];?>"><?php echo $row['file'];?></a></h4>
        </li>
        <?php
        }
        
        ?>
        </ol>
    </div>
        
    </div>
