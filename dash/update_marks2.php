<?php session_start();
if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
$_SESSION['userid']=$_SESSION['userid'];
$username=$_SESSION['userid'];
$Course_ID = $_GET['Course_ID'];
 include('db.php');

$type=$_POST['type'];
$student=$_POST['studentid'];
$mark=$_POST['mark'];

if($type=='Assignment#1'){
  $sql = "update $Course_ID set Assignment1=$mark where Stud_ID='$student' ";
}
elseif($type=='Assignment#2'){
  $sql = "update $Course_ID set Assignment2=$mark where Stud_ID='$student' ";
}
elseif($type=='Assignment#3'){
  $sql = "update $Course_ID set Assignment3=$mark where Stud_ID='$student' ";
}
elseif($type=='Quiz#1'){
  $sql = "update $Course_ID set quiz1=$mark where Stud_ID='$student' ";
}
elseif($type=='Quiz#2'){
  $sql = "update $Course_ID set quiz1=$mark where Stud_ID='$student' ";
}
elseif($type=='Quiz#3'){
  $sql = "update $Course_ID set quiz3=$mark where Stud_ID='$student' ";
}
elseif($type=='Periodicals#1'){
  $sql = "update $Course_ID set p1=$mark where Stud_ID='$student' ";
}
elseif($type=='Periodicals#2'){
  $sql = "update $Course_ID set p1=$mark where Stud_ID='$student' ";
}

if (mysqli_query($con, $sql)) {
  echo "<script> alert('Leave applied successfully.');</script>";
  echo "<script> window.location.href='update_marks.php?Course_ID=$Course_ID';</script>";
} else {
  echo "<script> alert('Error while inserting record.');</script>";
  echo "<script> window.location='courses_main.php';</script>";
}

?>
