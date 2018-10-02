<?php
session_start();
include 'connection.php';
$q=intval($_GET['q']);
$sql="select message from messages where id='$q'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$sql1="update messages set viewed=1 where id='$q' ";
mysqli_query($con,$sql1);
echo $row['message'];
?>
