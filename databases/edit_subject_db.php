<?php
session_start();
include('../../Common/databases/db_connection.php');
$subject_name=$_POST['subname'];
$grade=$_POST['grade'];
$subject_code;
$stream=$_POST['stream'];
$sub_code=$_SESSION['sub_code'];



    $sql_2="SELECT subject_name FROM subject WHERE grade='$grade'";
    $check=mysqli_query($con,$sql_2);
    $is_valid=true;
   while($check_duplication=mysqli_fetch_array($check)){
    if($check_duplication['subject_name']==$subject_name){
    $_SESSION['status']="THIS SUBJECT HAS ALREADY BEEN ADDED!";
    $is_valid=false;
    header("location: ../admin/EDIT/edit_Subject.php");
    exit();
    }
   }
if($is_valid){
     
if($grade=="11"||$grade=="12"){
    $sql2="UPDATE subject  SET subject_name='$subject_name',grade='$grade',stream='$stream' WHERE subject_code=$sub_code";
    mysqli_query($con,$sql2);
}
else{
    $sql2="UPDATE subject  SET subject_name='$subject_name',grade='$grade' WHERE subject_code=$sub_code";
        mysqli_query($con,$sql2);}

        $_SESSION['add_user']="SUBJECT IS SUCCESFULLY EDITED";
        header("location: ../dashboard/home.php");

}
?>