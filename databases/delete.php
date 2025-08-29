<?php
session_start();
include('../../Common/databases/db_connection.php');
$id=$_SESSION['id'];
$user_type=$_SESSION['user_type'];

if($user_type=='director'){
    $sql="DELETE FROM users WHERE id=$id";
    mysqli_query($con,$sql);
    
    $sql="DELETE FROM director WHERE director_id=$id";
    mysqli_query($con,$sql);
    
    $_SESSION['add_user']="DIRECTOR HAS SUCCESFULLY BEEN REMOVED!";
}


if($user_type=='teacher'){
    $sql="DELETE FROM users WHERE id=$id";
    mysqli_query($con,$sql);
    
    $sql="DELETE FROM teacher WHERE teacher_id=$id";
    mysqli_query($con,$sql);
    
    $_SESSION['add_user']="TEACHER HAS SUCCESFULLY BEEN REMOVED!";  
}


if($user_type=='student'){
    $sql="DELETE FROM users WHERE id=$id";
    mysqli_query($con,$sql);
    
    $sql="DELETE FROM student WHERE student_id=$id";
    mysqli_query($con,$sql);
    
    $_SESSION['add_user']="STUDENT HAS SUCCESFULLY BEEN REMOVED!";  
}

header("location: ../dashboard/home.php");
?>  