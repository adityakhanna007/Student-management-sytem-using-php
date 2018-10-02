
    <title>Index ::</title>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
include 'header.php';
include 'nav.php';
echo "<div class='jumbotron'>";
include 'slider.php';
include 'body.php';

echo "</div>";
include 'footer.php';
?>

   
