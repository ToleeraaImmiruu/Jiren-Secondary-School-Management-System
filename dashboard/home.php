<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="../css/home.css">
</head>
<body>
    
    <?php
include("./header.php");
include '../../Common/databases/db_connection.php';
$sql_count_students="SELECT COUNT(*) FROM student";
  $result_student=mysqli_query($con,$sql_count_students);
  $rows=mysqli_fetch_array($result_student);
  $total_students=$rows[0];
  
  $sql_count_teachers="SELECT COUNT(*) FROM teacher";
  $result_teacher=mysqli_query($con,$sql_count_teachers);
  $teachers=mysqli_fetch_array($result_teacher);
  $total_teachers=$teachers[0];

  $total=$total_students+$total_teachers;
  
  ?>
<div class="layout">

<?php
include("./left_dash.php");?>

 <div class="main-content dashboard-text">
  <h1 class="success">messages</h1>
  <?php  echo" <div class='card-grid'>
          <div class='card'>
            <h1>".$total_teachers."</h1>
            <a href='./teachers_list.php'><button class='view'>VIEW</button></a>
            <img src='../images/female.png'>
            <h3>TOTAL TEACHERS</h3>
       
           
          </div>
          <div class='card'>
          <h1>".$total_students."</h1>
          <a href='./students_list.php'><button class='view'>VIEW</button></a>
          <img src='../images/students.png'>

            <h3>TOTAL STUDENTS</h3>
            
          
          </div>
          <div class='card'>
          <h1>". $total."</h1>
          <button class='view'>VIEW</button>
          <img src='../images/school.png'>
            <h3>TOTAL USERS</h3>";
            
          ?>
          </div>
        </div>
</div>
    </div>
  


</body>
</html>
