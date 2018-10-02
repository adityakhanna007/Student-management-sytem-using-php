
<?php session_start() ;?>
    <?php include 'external.php'?>
<script>
$(document).ready(function(){
    <?php if(isset($_GET['wrong'])){
    ?>
    alert("wrong current password ! Try again");
    <?php
}
    if(isset($_GET['error'])){
    ?>
    alert("Password does not match ! Try again");
    <?php
}
    
    if(isset($_GET['ok'])){
        ?>
    alert("Password changed");
    <?php
    }?>
})

</script>

  <div id="container" >
      <?php include 'toggle.php';
      include 'sidebar.php';?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Change Password </h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="pass.php" onSubmit="return valid();">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Old Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="cur_pass" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">New Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="new_pass" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Confirm Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="con_new_pass" value="" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" value="Change" class="btn btn-theme"></div>
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
    
  

