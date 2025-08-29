<?php
session_start();
include("./db_connection.php");
$_SESSION['username']=$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT username,password,email,role FROM users where username='$name'";

$result = mysqli_query($con, $sql);

if(mysqli_affected_rows($con)>=1){
$data = mysqli_fetch_array($result);
if($data['email']==$email){
   if($data['password']==$password){
        $_SESSION['login_test']="LOGGED IN";
        $_SESSION['display_message']="";
        
        if($data['role']=="student"){
        $_SESSION['login_test']="student";
        $sql="SELECT fullname,photo FROM student  where username='$name'";
        $result=mysqli_query($con, $sql);
        $data=mysqli_fetch_array($result);

          $fullname=$data['fullname'];
          $image= $data['photo'];

        $_SESSION['fullname']=$fullname;
        $_SESSION['photo']=$image;
        header("location:../../Student/student.php");
        }
        else if($data['role']=="teacher"){
            $_SESSION['login_test']="teacher";
            $sql="SELECT teacher_id,fullname,photo FROM teacher where username='$name'";
            $result=mysqli_query($con, $sql);
            $data=mysqli_fetch_array($result);

             $image= $data['photo'];
             $teacher_id= $data['teacher_id'];
             $fullname=$data['fullname'];

            $_SESSION['teacher_id']=$teacher_id;
            $_SESSION['fullname']=$fullname;
            $_SESSION['photo']=$image;
            header("location:../../Teacher/teacher.php");
            }
        else if($data['role']=="director"){
            $_SESSION['login_test']="director";
            $sql="SELECT fullname,photo FROM director where username='$name'";
            $result=mysqli_query($con,$sql);
            $data=mysqli_fetch_array($result);

             $fullname=$data['fullname'];
             $image= $data['photo'];
    
            $_SESSION['fullname']=$fullname;
            $_SESSION['photo']=$image;
            header("location:../../Admin/dashboard/home.php");
                } 
    }
else{
        $_SESSION['display_message']="INCORRECT PASSWORD, please try again!";
        header("location:../login.php");
    }
}
else{
    $_SESSION['display_message']="INCORRECT EMAIL, please try again!";
    header("location:../login.php");   
}
}
else{
    $_SESSION['display_message']="INCORRECT USERNAME, please try again!";
  header("location:../login.php");

}

?>



