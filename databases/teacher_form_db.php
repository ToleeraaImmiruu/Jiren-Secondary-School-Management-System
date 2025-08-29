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



$sql="SELECT subject_code FROM subject WHERE subject_name='$subject' AND grade=$grade";
$result=mysqli_query($con, $sql);
$subject_code=mysqli_fetch_array($result);
if($subject_code[0]==null){
$_SESSION['subject']="Invalid subject";
header("location: ../forms/teacher_form.php");
exit();
}


$current_id;
$sql_id="SELECT MAX(teacher_id) FROM teacher";
$result=mysqli_query($con,$sql_id);
$data=mysqli_fetch_array($result);
if($data[0]==null){
$current_id=100;
}
else{
$current_id=(intval($data[0]) + 1);
}

$users = "INSERT INTO users VALUES ('$fullname','$current_id','$username','$password','$email','$role')";
mysqli_query($con,$users);


$sql1="INSERT INTO teacher VALUES('$current_id','$fullname','$username','$email','$phone','$password','$stream', '$subject_code[0]','$grade','$class','$image','$background')";


mysqli_query($con, $sql1);

header("location: ../dashboard/home.php");



?>








