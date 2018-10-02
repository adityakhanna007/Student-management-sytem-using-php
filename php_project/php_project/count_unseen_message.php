<?php
include "connection.php";
$username= $_SESSION['username'];
$sql="select * from messages where t ='$username' and viewed =0 ";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
echo "$count";
?>