
<div class="col-sm-9 frame animated fadeInRight jumbotron">
                <h3 style="text-align:center"> Change Password</h3>
    <hr>
    <form action="pass.php" method="post" enctype="multipart/form-data">
        <div class="col-sm-12">
        Current Password:<input type="text" class="form-control" placeholder="Current Password" name="cur_pass" required>
            <br>
        New Password:<input type="text" class="form-control" placeholder="New Password" name="new_pass" required>
            <br>
             Confirm Password:
            <input type="text" class="form-control" placeholder="Confirm Password"name="con_new_pass" required>
        <br>
            
       
            <button type="submit" class="btn btn-success">Change</button> 
    
    </div>
    </form>  
    </div>
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



