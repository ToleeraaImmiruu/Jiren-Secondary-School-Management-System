<?php
session_start();
include('../../Common/databases/db_connection.php');
$title = mysqli_real_escape_string($con, $_POST['title']);
$body = mysqli_real_escape_string($con, $_POST['body']);
$for = mysqli_real_escape_string($con, $_POST['for']);

$sql="INSERT INTO announcement (title,body,announcement_for) values('$title','$body','$for')";
mysqli_query($con,$sql);
 if(mysqli_affected_rows($con)>=1){
    $_SESSION['add_user']="Announcement has successfully been posted!";
    header("location: ../dashboard/home.php");
 }


?>