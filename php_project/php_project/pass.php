<?php
include "connection.php";
session_start();
$username=$_SESSION['username'];
$pass=$_POST['cur_pass'];
$new_pass=$_POST['new_pass'];
$con_new_pass=$_POST['con_new_pass'];
$sql="select password from users where username= '$username' ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
print_r($row);
if($pass!=$row['password'])
{
    header("location:home.php?change_pass&wrong");
}
else if($new_pass!=$con_new_pass)
{
   header("location:home.php?change_pass&error"); 
}
else{
    $sql="update users set password='$new_pass' where username='$username'";
    $res=mysqli_query($con,$sql);
    header("location:home.php?change_pass&ok");
}

?>