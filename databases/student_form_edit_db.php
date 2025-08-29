
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
$id=$_SESSION['id'];

$users = "UPDATE users SET fullname='$fullname', id='$id',username='$username',password='$password',role='$role' WHERE id=$id";
mysqli_query($con,$users);

$sql="UPDATE student SET student_id='$id', fullname='$fullname', username='$username',  email='$email', phone_number='$phone',password='$password',stream='$stream',grade='$grade',class='$class',photo='$image'  WHERE student_id=$id";

mysqli_query($con, $sql);
header("location: ../dashboard/home.php");
?>