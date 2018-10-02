<?php
session_start();
if(isset($_SESSION['username']))
header("location:manage-users.php");
include 'external.php';?>    
<title>Admin | Login</title>
     <div id="login-page">
	  	<div class="container">
            <form class="form-login" action="check1.php" method="post">
		        <h2 class="form-login-heading" >sign in now</h2>
                  <p style="color:#F00; padding-top:20px;" align="center">
                      <?php 
                      if(isset($_GET['deny']))
                      { echo "Incorrect username or password";}
                      ?>
                </p>
		        <div class="login-wrap">
		            <input type="text" name="user_name" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="pass" class="form-control" placeholder="Password"><br >
		            <input   class="btn btn-theme btn-block" type="submit">
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
