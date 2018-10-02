 <div class=" col-sm-12 dropdown">
             <?php include 'connection.php';
            $username=$_SESSION['username'];
            $sql="select dp from users where username='$username'";
            $res=mysqli_query($con,$sql);
            $res=mysqli_fetch_assoc($res);
        
            if($res['dp']=="")
            {
            ?>
     <div class="box" style="cursor:pointer"><a href="home.php"><span class="glyphicon glyphicon-user"></span></a></div>
             
            
            <?php
            }
            else{
                ?>
     <a href="home.php"><img src="profile/<?php echo $res['dp']?>" style="border-radius:100px;max-width:70px;min-height:70px;"></a>
             
            <?php
            }
            ?>
            
  
                </div>