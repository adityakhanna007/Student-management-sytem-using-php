
<?php
session_start();

include 'connection.php';
$username=$_POST['user_name'];
$passwrd=$_POST['pass'];
$sql="select *from users where username='$username' and password='$passwrd' ";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);

if($count==1)
{
    $_SESSION['username']=$_POST['user_name'];
    header("location:index.php");
}
else
{
   header("location:login.php?deny");
}

?>


    