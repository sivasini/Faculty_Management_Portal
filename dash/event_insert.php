<?php session_start();
if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
$_SESSION['userid']=$_SESSION['userid'];
$username=$_SESSION['userid'];
 //include('db.php');
 $con = new mysqli("localhost","root","","faculty_dashboard");

$name=$_POST['name'];
$start=$_POST['stime'];
$start=date("g:i a", strtotime($start));

$end=$_POST['etime'];
$end=date("g:i a", strtotime($end));

$reason=$_POST['reason'];
$link=$_POST['link'];

$date = date("Y-m-d");
$day = date("l", strtotime($date));
$s = "update timetable set meet_name='$name',starttime='$start',endtime='$end',reason='$reason',meet_link='$link' where day='$day';";

if (mysqli_query($con, $s)) {
  echo "<script> alert('Added meeting successfully.');</script>";
  echo "<script> window.location='htimetable.php';</script>";
}
else {
   echo "<script> alert('Error while updating record.');</script>";
   echo "<script> window.location='event.php';</script>";
}


?>
