<?php 
include 'connection.php';
    $sql="select *from ece_faculty";
    $res=mysqli_query($con,$sql);
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<script src="js_file/jquery.js"></script>

<title>Faculty_ece ::</title>
<style>
    body{
        background:lavender;
    }
</style>
<body>
<div class="container" style="margin-top:5%;background:white">
    <?php
    while($rows=mysqli_fetch_assoc($res))
    {
        
    ?>
    <div class="col-sm-12" ><hr></div>
    <div class="col-sm-12" id="<?php echo $rows['id']?>">
    <div class="col-sm-4">
    <img class="img-responsive" width="50%" style="margin-left:auto;margin-right:auto;margin-top:30%" src="<?php echo $rows['dp'];?>">
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <div class="col-sm-6">
    <h3>Name:</h3>
    <p><?php echo $rows['name']; ?></p>
        </div>
        <div class="col-sm-6">
    <h3>Designation:</h3>
    <p><?php echo $rows['designation'];?></p>
        </div>
    <div class="col-sm-6">
   
         <h3>Department:</h3>
    <p><?php echo $rows['department'];?></p>
         
        </div>
        <div class="col-sm-6">
         <h3>phone:</h3>
    <p><?php echo $rows['phone'];?></p>
        </div>
   
        <div class="col-sm-6">
     <h3>Address:</h3>
    <p><?php echo $rows['address'];?></p>
        </div>
        <div class="col-sm-12">
            <h3>Qualification:</h3>
          <p><?php echo $rows['qualification'];?></p>
        </div>

        <div class="col-sm-6">
         <h3>email:</h3>
    <p><?php echo $rows['email'];?></p>
        </div>
        <div class="col-sm-6">
         <h3>Fax:</h3>
    <p><?php echo $rows['fax'];?></p>
        </div>
        </div>
    </div>
     <?php
    }
    ?>
        </div>
    
   
    

    
    


</body>