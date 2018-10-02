<?php
session_start();
include'dbconnection.php';
if(isset($_POST['Submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	mysqli_query($con,"update users set fname='$fname' ,lname='$lname' , phone='$contact' where id='".$_GET['uid']."'");
$_SESSION['msg']="Profile Updated successfully";
}
include 'external.php';?>
<div id="container" >
      <?php include 'toggle.php';
            include 'sidebar.php';
       $ret=mysqli_query($con,"select * from users where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['fname'];?>'s Information</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">First Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Last Ename</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Contact no. </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" value="<?php echo $row['phone'];?>" >
                              </div>
                          </div>
                            
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
      </section>
      </div>
<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
        <?php } ?>
      
    
  

  
