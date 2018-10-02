
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container-fluid animated " style="background:crimson;padding-bottom:5px">
        <div class="row">
    <div class="col-sm-6">
        <img src="http://www.nitj.ac.in/images/home/logo.png" class="img-responsive" style="margin-top:15px">
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2 row">
           
        <div class="col-sm-12">
            <h3 style="color:white;margin-top:5px">Hello,<?php echo " ".$_SESSION['username']?></h3>
        </div>
        <?php include 'headuser.php'; ?>
        
        </div>
        </div>
    
    
    </div>
