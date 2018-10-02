<?php
include 'connection.php';
session_start();
$username=$_SESSION['username'];
$subject=$_POST['subject'];
$txt=$_POST['ta'];

$to=$_POST['t'];
$filename = $_FILES['file']['name'];
$filetmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"attachments/".$filename);
$sql="insert into messages(f,t,message,subject,file) values ('$username','$to','$txt','$subject','$filename')";
if(mysqli_query($con,$sql))
header("location:home.php?compose&sent");


?>