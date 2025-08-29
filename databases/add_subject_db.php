<?php
session_start();
include('../../Common/databases/db_connection.php');
$subject_name=$_POST['subname'];
$grade=$_POST['grade'];
$subject_code;
$stream=$_POST['stream'];

$sql="SELECT MAX(subject_code) FROM subject WHERE subject_code LIKE '$grade%'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_array($result);
if($data[0]==null){
if($grade==9){
$subject_code=$grade."000";}
else{
$subject_code=$grade."00";}
}
else{
    $sql_2="SELECT subject_name,stream FROM subject WHERE grade='$grade'";
    $check=mysqli_query($con,$sql_2);
    $is_valid=true;
   while($check_duplication=mysqli_fetch_array($check)){
    if($check_duplication['subject_name']==$subject_name){

    if($check_duplication['stream']==$stream){
        $_SESSION['status']="THIS SUBJECT HAS ALREADY BEEN ADDED!";
        $is_valid=false;
        header("location: ../dashboard/addSubject.php");
        exit();

    }

    }
   }
    if($is_valid){
    if($data[0]<10000){
        $subject_code=$data[0]+1;
        }
        else{
            $_SESSION['status']="The database is full! (cannot add more subjects)";
            header("location: ../dashboard/addSubject.php");
        }
    }
}if($grade=="11"||$grade=="12"){
    $sql2="INSERT INTO subject VALUES('$subject_code','$subject_name',$grade,'$stream')";
        mysqli_query($con,$sql2);
}
else{
    $sql2="INSERT INTO subject VALUES('$subject_code','$subject_name',$grade,'')";
        mysqli_query($con,$sql2);}
        $_SESSION['add_user']="SUBJECT IS SUCCESFULLY ADDED";
        header("location: ../dashboard/home.php");

    
?>