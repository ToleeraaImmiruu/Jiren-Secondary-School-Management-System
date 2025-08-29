<?php 
include("../../Common/databases/db_connection.php");
session_start();

$_SESSION['add_fullname']=$fullname = $_POST['fullname'];
$_SESSION['add_username']=$username = $_POST['username'];
$_SESSION['add_email']=$email = $_POST['email'];
$_SESSION['add_password']=$password = $_POST['password'];
$_SESSION['add_role']=$role = "student";
$_SESSION['add_image']=$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$sql="SELECT username FROM users";
$result=mysqli_query($con,$sql);


while($data=mysqli_fetch_array($result)){
    if($username==$data['username']){
        $isTaken=true;
    }
}
if($isTaken){
$_SESSION['invalid_username']="Username is already taken!";
header("location: ./signup_student.php");
}
else{
        header("location: ./student_form.php");
        $_SESSION['add_user']="STUDENT IS SUCCESFULLY ADDED";
}




?>