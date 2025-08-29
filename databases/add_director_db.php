<?php
session_start();
include('db_connection.php');
$fullname =$_POST['fullname'];
$username =$_POST['username'];
$email=$_POST['email'];
$password = $_POST['password'];
$role=$_POST['role'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));

$current_id;
$sql_id="SELECT MAX(director_id) FROM director";
$result=mysqli_query($con,$sql_id);
$data=mysqli_fetch_array($result);
if($data[0]==null){
$current_id=1;
}
else{
$current_id=(intval($data[0]) + 1);
}


$users = "INSERT INTO users VALUES ('$fullname','$current_id','$username','$password','$email','$role')";
mysqli_query($con,$users);

$sql="INSERT INTO director VALUES('$fullname','$current_id','$username','$email','$password','$image')";

mysqli_query($con, $sql);
header("location: ../dashboard/home.php");
?>