<?php
include "connection.php";
 $username= $_SESSION['username'];
                   $sql="select * from users where username= '$username' ";
            $res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

?>
<div id="content"  class="col-sm-9 frame animated fadeInRight jumbotron" >
                <h3 style="text-align:center">Profile</h3>
    <hr>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <label for="fileinput" style="font-size:50px;display:block;width:15%;margin-left:auto;margin-right:auto;cursor:pointer">
        <?php include 'image.php';?>
        </label>
        
     <input  id="fileinput" type="file" style="display:none" name="dp">
       <hr>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        First Name:<input type="text" class="form-control" value="<?php echo $row['fname']?>" name="fname">
            <br>
        Last Name:<input type="text" class="form-control" value="<?php echo $row['lname']?>"name="lname">
            <br>
            Email-id:<input type="text" class="form-control" value="<?php echo $row['email']?>" name="email">
        <br>
            Phone no::<input type="text" class="form-control" value="<?php echo $row['phone']?>" name="phone">
        <br>
        User Name:<input type="text" class="form-control" value="<?php echo $row['username']?>" readonly>
        
        <br>
        Password:<input type="text" class="form-control" value="<?php echo $row['password']?>" readonly>
        <br>
            
        <button type="submit" class="btn btn-success" >Update</button> 
    
    </div>
    </form>  
    </div>




