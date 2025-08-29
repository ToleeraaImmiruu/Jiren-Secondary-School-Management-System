<?php
session_start();
include('db_connection.php');
    $id=$_SESSION['id'];
 
$_SESSION['add_fullname']=$fullname = $_POST['fullname'];
$_SESSION['add_username']=$username = $_POST['username'];
$_SESSION['add_email']=$email = $_POST['email'];
$_SESSION['add_password']=$password = $_POST['password'];
$_SESSION['add_role']=$role = $_POST['role'];
$_SESSION['add_image']=$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    if ($role == "student") {
        header("location: ../edit/student_form_edit.php");
        $_SESSION['add_user']="STUDENT DATA IS SUCCESFULLY CHANGED";
    } else if ($role == "teacher") {
        header("location: ../edit/teacher_form_edit.php");
        $_SESSION['add_user']="TEACHER DATA IS SUCCESFULLY CHANGED";
    } else if ($role == "director") {
        header("location: ./director_edit_db.php");
        $_SESSION['add_user']="DIRECTOR DATA IS SUCCESFULLY CHANGED";
    }
    else {
         $_SESSION['invalid_role'] = "INVALID ROLE";
         header("location: ../edit.php");
}

 
 ?>