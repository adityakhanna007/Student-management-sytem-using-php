<?php
include 'dbconnection.php';
$name=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,"../uploads/".$name);
$sql="insert into down (file) values ('$name')";
if(mysqli_query($con,$sql)){
    header("location:manage_document.php?added");
}

?>