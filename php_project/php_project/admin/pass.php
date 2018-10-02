<?php
include "dbconnection.php";
session_start();
$username=$_SESSION['username'];
$pass=$_POST['cur_pass'];
$new_pass=$_POST['new_pass'];
$con_new_pass=$_POST['con_new_pass'];
$sql="select password from admin where username= '$username' ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

if($pass!=$row['password'])
{
    header("location:change-password.php?wrong");
}
else if($new_pass!=$con_new_pass)
{
   header("location:change-password.php?error"); 
}
else{
    $sql="update admin set password='$new_pass' where username='$username'";
    $res=mysqli_query($con,$sql);
    header("location:change-password.php?ok");
}

?>