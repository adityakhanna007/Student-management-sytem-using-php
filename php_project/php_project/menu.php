
<div class="container-fluid">
        <div class="row">
     <div class=" col-sm-3" style="border-radius:0px;background:green;height:600px">
        <br>
         <form action="logout.php">
        <?php include 'menu-image.php'?>
             <br>
            <div class="form-group" style="margin-left:0%;">
             <input type="submit" class="btn btn-primary" value="logout">
             </div>
          </form>
         <br>
         <div class="menu_item"><a href="home.php?profile">Profile</a></div>
        <div class="menu_item"><a href="home.php?courses" >Subjects</a></div>
         <div class="menu_item"><a href="home.php?tt"  >TimeTable</a></div>
        <div class="menu_item"><a href="home.php?downloads">Documents</a></div>
         <div class="menu_item"><a href="home.php?compose">Compose</a></div>
         <div class="menu_item"><a href="home.php?inbox">Inbox </a>
             <span class="badge">
             <?php include 'count_unseen_message.php';?>
             </span></div>
         <div class="menu_item"><a href="home.php?change_pass">Change Password</a></div>
    </div>

    
    <?php
        if($_SERVER['REQUEST_URI']=="/php_project/php_project/home.php")
        {
            ?>
        <div class="col-sm-9  jumbotron" id="content">
            
                <h1 style="text-align:center;font-family: 'Bungee Inline'">WELCOME <?php echo $username?></h1>
            <?php
    }
            if(isset($_GET['profile']))
        {  include 'profile.php';}
             if(isset($_GET['courses']))
        {  include 'courses.php';}
              if(isset($_GET['tt']))
        {  include 'timetable.php';}
             if(isset($_GET['downloads']))
        {  include 'downloads.php';}
              if(isset($_GET['change_pass']))
        {  include 'change_pass.php';}
             if(isset($_GET['compose']))
        {  include 'compose.php';}
            if(isset($_GET['inbox']))
        {  include 'inbox.php';}
            ?>
      
            </div>
        </div>
</div>


             