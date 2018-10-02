<?php
session_start();
include'dbconnection.php';
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from ece_faculty where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Users</title>
    <?php include 'external.php';?>
  </head>

  <body>

  <div id="container" >
      <?php include 'toggle.php';include 'sidebar.php' ;?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Teachers</h3>
				<div class="row">
				
                   <div class="col-md-12">
                      <div class="content-panel table-responsive">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Teachers Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">Name</th>
                                  <th>designation</th>
                                  <th>Department</th>
                                  <th>Qualifications</th>
                                  <th>Address</th>
                                  <th>phone</th>
                                
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from ece_faculty");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['designation'];?></td>
                                  <td><?php echo $row['department'];?></td>
                                  <td><?php echo $row['qualification'];?></td>
                                  <td><?php echo $row['address'];?></td>
                                  <td><?php echo $row['phone'];?></td>  
                                  
                                  <td>
                                     
                                     <a href="update_profile_teachers.php?uid=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-teachers.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
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

  </body>
</html>
