<?php include 'connection.php';

            $username=$_SESSION['username'];
            $sql="select dp from users where username='$username'";
            $res=mysqli_query($con,$sql);
            $res=mysqli_fetch_assoc($res);
        
            if($res['dp']=="")
            {
            ?>
            <img src="img/user.jfif">
            <?php
            }
            else{
                ?>
             <img src="profile/<?php echo $res['dp']?>" style="width:100%;">
            <?php
            }
            ?>