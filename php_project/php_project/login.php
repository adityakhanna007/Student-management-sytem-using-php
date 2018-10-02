<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="js_file/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="animate.css">

<?php
session_start();
if(isset($_SESSION['username']))
{
    header("location:index.php");
}

?>
<!DOCTYPE>
<html>
<head><title>Login ::</title>
<style>
body{
                background-image:url(img/col.jpg);
                
                background-repeat: no-repeat;
                background-size: cover;
            }
    </style>
    </head>
    <body>
   <div class="container-fluid" style="margin-top:100px;">
        <div class="row">
        <div class="col-sm-1"></div>
      
        <div class="col-sm-4 login form-group " >
              <form action="check.php" method="post">
        <div class="user">
            <i class=" fas fa-user"></i>
        </div>
            <h2 style="margin-left:30%;color:white;margin-top:-15px;">Login Here</h2>
            <br>
            <h3 style="color:white">Username</h3>
          
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white"type="text" name="user_name" required class="form-control" placeholder="username" >
            <br>
              <h3 style="color:white">Password</h3>
          
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white"type="password" name="pass" required class="form-control" placeholder="password">
            <br><br>
                   <p  style="font-size:20px;color:white;text-align:center" >
        <?php

if(isset($_GET['deny']))
		{
			echo "incorrect username or password!";
		}
       
?>
        </p>
            <input type="submit" value="Login" class="btn btn-primary form-control">
          <br><br>
            <a style="cursor:pointer">forgot password?</a>
              <br><br>
                  </form>
        </div>
              
        <div class="col-sm-1"></div>
        <form action="signup.php" method="post">
        <div class="col-sm-5 login form-group ">
        <div class="user1">
            <i class="fas fa-user-plus"></i>
         </div>
        <h2 style="color:white;margin-top:-15px;text-align:center">Create New Account</h2>
            
            <div class="row">
                <div class="col-sm-6">
                    <h3 style="color:white">First name</h3>
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white"type="text" name="fname" required class="form-control" placeholder="First name" >
                </div>
                <div class="col-sm-6">
                    <h3 style="color:white">Last name</h3>

                    <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white" type="text" name="lname" required class="form-control" placeholder="Last name" >
                </div>
            </div>
            <h3 style="color:white">Username</h3>
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white" type="text" name="username" required class="form-control" placeholder="Username" >
            
            <h3 style="color:white">Password</h3>
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white" type="Password" name="passwrd" required class="form-control" placeholder="Password" >
            
            <h3 style="color:white">Confirm Password</h3>
            <input style="background:transparent;color:white;border:0px;border-bottom:2px solid white"type="Password" name="con_passwrd"  required class="form-control" placeholder="Confirm Password">
            <br>
             <p  style="font-size:20px;color:white;text-align:center" >
        <?php

if(isset($_GET['wrong']))
		{
			echo "password does not match!";
		}
            if(isset($_GET['exists']))
		{
			echo "username exists";
		}
            if(isset($_GET['added']))
		{
			echo "signup successful. Login to continue";
		}
?>
        </p>
            <input type="submit" class="btn btn-success form-control">
            <br><br>
            
        </div>
        </form>
        <div class="col-sm-1"></div>
        
    </div>
        </div>
    </body>
</html>