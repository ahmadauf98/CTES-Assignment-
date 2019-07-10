<?php 
session_start();
require ("db.php");

&duration="";
$result = mysqli_query($con,"select * from table1");
while ($row=mysqli_fetch_array($result))
{
	$duration=$row["duration"];
}

$_SESSION["duration"]=$duration;
$_SESSION["start_time"]=date("i:s");

$end_time= $end_time('i:s', strtotime('+'.$_SESSION["duration"].'minutes',

?>