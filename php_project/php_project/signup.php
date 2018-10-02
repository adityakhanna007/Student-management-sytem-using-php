<?php
include 'connection.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$pass=$_POST['passwrd'];
$con_pass=$_POST['con_passwrd'];
if($pass!=$con_pass)
{
     header("location:login.php?wrong");
    exit;
}

$sql="select * from users where username='$username' ";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count==0)
{
    $sql="insert into users(fname,lname,username,password)values('$fname','$lname','$username','$pass')";
    mysqli_query($con,$sql);
    header("location:login.php?added");
    
    
    
}
else
{
     header("location:login.php?exists");
}


?>