<?php
session_start();
include('db_connection.php');
$fullname =$_SESSION['add_fullname'];
$username =$_SESSION['add_username'];
$email=$_SESSION['add_email'];
$password = $_SESSION['add_password'];
$role=$_SESSION['add_role'];
$image=$_SESSION['add_image'];
$id=$_SESSION['id'];


$users = "UPDATE users SET fullname='$fullname', id='$id',username='$username',password='$password',role='$role'  WHERE id=$id";
mysqli_query($con,$users);

$sql="UPDATE director SET ('$fullname','$id','$username','$email','$password','$image') WHERE director_id=$id";

$sql="UPDATE director SET fullname='$fullname', 
director_id='$id', username='$username',  email='$email',password='$password', photo='$image'  WHERE director_id=$id";

mysqli_query($con, $sql);
header("location: ../admin/admin.php");
?>