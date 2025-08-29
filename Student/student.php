<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./css/student.css" />
  <title>Student Dashboard</title>
</head>
<body>
 <?php
 include 'header.php';
 include '../common/databases/db_connection.php';
$sql_student="SELECT fullname,student_id,grade,class FROM student WHERE username='$username'";
$result_student=mysqli_query($con,$sql_student);
$data_student=mysqli_fetch_array($result_student);
$student_name=$data_student['fullname'];
$id=$data_student['student_id'];
$grade=$data_student['grade'];
$class=$data_student['class'];
?>

  <div class="intro">
    <img src="./images/student.jpg" alt="">
    <div class="wellcome">
      <?php
      echo"
      <h1>🎉Welcome🎉</h1>
      <h3>Name: ".$student_name."👨‍🎓</h3>
      <h3>ID: ".$id." </h3>
      <h3>Grade: ".$grade,$class."</h3>";
      ?>
   
    </div>
  </div>
<div class="another">
  <table border="1" cellspacing="0">
    <tr>
      <th>Mark</th>
      <th>Evaluation</th>
    </tr>
    <tr>
      <td>90 - 100</td>
      <td>Excellent</td>
    </tr>
    <tr>
      <td>80 - 89</td>
      <td>Very Good</td>
    </tr>
    <tr>
      <td>70 - 79</td>
      <td>Good</td>
    </tr>
    <tr>
      <td>60 - 69</td>
      <td>Satisfactory</td>
    </tr>
    <tr>
      <td>50 - 59</td>
      <td>Pass</td>
    </tr>
    <tr>
      <td>0 - 49</td>
      <td>Fail</td>
    </tr>
  </table>
   <img src="./images/xw4b5lDJ.jpg" alt="">
</div>

  </div>
<?php
include 'footer.php' ?>

</body>
</html>