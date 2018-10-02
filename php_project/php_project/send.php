<?php
include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$txt=$_POST['txt'];
$sql="insert into contact(name,email,phone,message) values('$name','$email','$phone','$txt')";
if(mysqli_query($con,$sql))
{
    header("location:contact.php?sent");
}



?>