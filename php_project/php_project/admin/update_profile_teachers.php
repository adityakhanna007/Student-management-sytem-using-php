<?php
session_start();
include'dbconnection.php';
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$des=$_POST['des'];
	$dep=$_POST['dep'];
    $qual=$_POST['qual'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
	mysqli_query($con,"update ece_faculty set name='$name' ,designation='$des' , department='$dep',qualification='$qual',address='$address',phone='$phone' 
    where id='".$_GET['uid']."'");
    ?>
<script>
alert("updated");
</script>
<?php
}
include 'external.php';?>
<div id="container" >
      <?php include 'toggle.php';
            include 'sidebar.php';
       $ret=mysqli_query($con,"select * from ece_faculty where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_assoc($ret))
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['name'];?>'s Information</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;"> Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Designation</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="des" value="<?php echo $row['designation'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Department</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="dep" value="<?php echo $row['department'];?>" readonly >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Qualifications</label>
                              <div class="col-sm-10">
                                  <textarea type="text" class="form-control" name="qual" style="height:100px;"><?php echo $row['qualification'];?></textarea>
                              </div>
                          </div>
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Address</label>
                              <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="address" style="height:100px;"><?php echo $row['address'];?></textarea>
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Phone</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>" >
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
      
    
  

  
