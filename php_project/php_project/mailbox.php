<?php
session_start();
include 'connection.php';
$q=intval($_GET['q']);
$sql="select * from users where id='$q'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

?>
<div class="col-sm-2"></div>
<div class="col-sm-8">
<form class="form-horizontal" action="message.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="control-label col-sm-2" for="to">To:</label>
    <div class="col-sm-10">
<input class="form-control" type="text" name="t" id="to" value="<?php echo $row['username'];?>" readonly>
    </div>
    
</div>
    <div class="form-group">
<label class="control-label col-sm-2" for="Subject">Subject:</label>
    <div class="col-sm-10">
<input class="form-control" type="text" id="Subject" name="subject" placeholder="Subject">
        </div>
    </div>
<div class="form-group">
<label class="control-label col-sm-2" for="Mess">Message:</label>
    <div class="col-sm-10">
<textarea class="form-control" id="Mess" style="height:50% " name="ta"></textarea>
    </div>
    
</div> 
    <div class="form-group">
        <div class="col-sm-2"></div>
<div class="col-sm-4">
    <label class="control-label" for="file">
        <span class="glyphicon glyphicon-paperclip" style="cursor:pointer"></span>
        Attach file
    </label>
<input type="file" style="display:none" id="file" onchange="func()" name="file">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5" id="fileup">
        No File Attached
        </div>
    
</div> 
    <div class="form-group">
        <div class="col-sm-2"></div>
<div class="col-sm-3">
<input type="submit" class="form-control btn btn-primary" value="Send">
    </div>
    
</div> 
   
    

</form>
</div>
<?php

?>