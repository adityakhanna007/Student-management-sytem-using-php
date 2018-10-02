<?php
session_start();
include'dbconnection.php';
if(isset($_GET['added'])){
    ?>
   <script>
        alert("file added");
        </script>
<?php
}
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from down where id='$adminid'");
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

    <title>Admin | Manage document</title>
    <?php include 'external.php';?>
  </head>

  <body>

  <div id="container" >
     <?php include 'toggle.php';include 'sidebar.php';?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Documents</h3>
				<div class="row">
				 <div class="col-sm-12">
                      <div class="content-panel table-responsive">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Documents </h4>
                              
	                  	  	  <hr>
                              <div class="container">
                                  <div class="row">
                              <div class="col-sm-4"></div>
                                      <div class="col-sm-3">
                              <form action="ins-file.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group ">
                                    <input type="file" class="form-control" name="file">
                                      
                                      <input type="submit" class=" btn btn-danger form-control" value="add">
                                  
                                  </div>
                              
                              </form>
                                      </div>
                              </div>
                              </div>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  
                                  <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from down");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['file'];?></td>
                                 <td>
                                     <a href="manage_document.php?id=<?php echo $row['id'];?>"> 
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
