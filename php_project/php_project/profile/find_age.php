<?php
$s_date=$_POST['date'];
$e_date=$_POST['date1'];
$s_month=$_POST['month'];
$e_month=$_POST['month1'];
$s_year=$_POST['year'];
$e_year=$_POST['year1'];
$s_age=mktime("0","0","0","$s_month","$s_date","$s_year");
$e_age=mktime("0","0","0","$e_month","$e_date","$e_year");
$year=-1;
while($s_age<=$e_age)
{
    $year++;
   
    $s_age=strtotime("+1 YEAR",$s_age);
    
}
$s_age=strtotime("-1 YEAR",$s_age);
$month=-1;
while($s_age<=$e_age)
{
    $month++;
    $s_age=strtotime("+1 month",$s_age);
}
$s_age=strtotime("-1 month",$s_age);
$day=-1;
while($s_age<=$e_age)
{
    $day++;
    $s_age=strtotime("+1 day",$s_age);
}
echo $year." years ".$month." months ".$day." days ";

?>