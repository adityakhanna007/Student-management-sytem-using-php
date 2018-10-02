<?php 
session_start();
$username= $_SESSION['username'];
include 'connection.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql="update  users set fname='$fname',lname='$lname',email='$email',phone='$phone' where username='$username' ";
mysqli_query($con,$sql);
if($_FILES['dp']['type']=="image/jpeg"||$_FILES["dp"]["type"]=="image/JPEG"||$_FILES["dp"]["type"]=="image/PNG"||$_FILES["dp"]["type"]=="image/gif"||$_FILES["dp"]["type"]=="image/jpg"||$_FILES["dp"]["type"]=="")
{
  
   $filename = $_FILES['dp']['name'];
$filetmp = $_FILES['dp']['tmp_name'];
    move_uploaded_file($filetmp,"profile/".$filename);
    
    $sql="update users set dp='$filename' where username='$username' ";
    if($res=mysqli_query($con,$sql))
    {
        header("location:home.php?profile");
    }
}











?>