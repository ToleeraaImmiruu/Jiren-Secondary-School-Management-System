<?php
session_start();
include("../../Common/databases/db_connection.php");
$phone=$_POST['phone'];
$stream=$_POST['stream'];
$grade=$_POST['grade'];
$subject=$_POST['subject'];
$class=$_POST['class'];
$background=$_POST['background'];
$fullname =$_SESSION['add_fullname'];
$username =$_SESSION['add_username'];
$email=$_SESSION['add_email'];
$password = $_SESSION['add_password'];
$role=$_SESSION['add_role'];
$image=$_SESSION['add_image'];
$id=$_SESSION['id'];


$sql="SELECT subject_code FROM subject WHERE subject_name='$subject' AND grade=$grade";
$result=mysqli_query($con, $sql);
$subject_code=mysqli_fetch_array($result);
if($subject_code[0]==null){
$_SESSION['stream']="Invalid subject!";
header("location: ../edit/teacher_form_edit.php");
exit();
}



$users = "UPDATE users SET fullname='$fullname', id='$id',username='$username',password='$password',role='$role' WHERE id=$id";
mysqli_query($con,$users);


$sql1="UPDATE teacher SET teacher_id='$id', fullname='$fullname', username='$username',  email='$email', phone_number='$phone',password='$password',stream='$stream',subject_code='$subject_code[0]',grade='$grade',classes='$class',photo='$image'  WHERE teacher_id=$id";



mysqli_query($con, $sql1);

header("location: ../dashboard/home.php");



?>








