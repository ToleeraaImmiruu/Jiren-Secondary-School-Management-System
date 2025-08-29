
<?php
session_start();
include("../../Common/databases/db_connection.php");
$phone=$_POST['phone'];
$stream=$_POST['stream'];
$grade=$_POST['grade'];
$class=$_POST['class'];
$fullname =$_SESSION['add_fullname'];
$username =$_SESSION['add_username'];
$email=$_SESSION['add_email'];
$password = $_SESSION['add_password'];
$role=$_SESSION['add_role'];
$image=$_SESSION['add_image'];



$current_id;
$sql_id="SELECT MAX(student_id) FROM student";
$result=mysqli_query($con,$sql_id);
$data=mysqli_fetch_array($result);
if($data[0]==null){
$current_id=1000;
}
else{
$current_id=(intval($data[0]) + 1);
}
$users = "INSERT INTO users VALUES ('$fullname','$current_id','$username','$password','$email','$role')";
mysqli_query($con,$users);

$sql_student="INSERT INTO student VALUES ('$current_id','$fullname','$username','$email',$phone,'$password','$stream', '$grade','$class','$image')";

mysqli_query($con, $sql_student);
header("location: ../dashboard/home.php");
?> 