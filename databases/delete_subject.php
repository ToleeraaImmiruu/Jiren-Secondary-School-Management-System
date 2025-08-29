<?php
session_start();
include('../../Common/databases/db_connection.php');
$sub_code=$_SESSION['sub_code'];
$user_type=$_SESSION['user_type'];



    $sql="DELETE FROM subject WHERE subject_code=$sub_code";
    mysqli_query($con,$sql);
    
    $_SESSION['add_user']="STUBJECT HAS SUCCESFULLY BEEN REMOVED!";  


header("location: ../dashboard/home.php");
?>  