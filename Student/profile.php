<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href='./css/profile.css'>
</head>
<body>

<?php
include 'header.php';
include('../Common/databases/db_connection.php');
include('../Common/databases/mark_db_connection.php');

if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    }

$sql_student="SELECT * FROM student WHERE username='$username'";
$result_student=mysqli_query($con,$sql_student);
$data_student=mysqli_fetch_assoc($result_student);
echo "<div class='profile'>";
echo"
<img  id='student' src='data:image/*;base64,".base64_encode($data_student['photo'])."'>
";
echo "<table border='2px' ";

echo "<tr> <td> NAME </td> <td>".$data_student['fullname']."
</td> </tr> <tr><td> ID </td><td>".$data_student['student_id']."
</td> </tr>  <tr> <td> USERNAME </td><td>".$data_student['username']."
 </td> </tr> <tr><td> EMAIL </td><td>".$data_student['email']."
</td></tr>  <tr> <td> PHONE </td><td>".$data_student['phone_number']."
</td></tr>  <tr> <td>STREAM </td><td>".$data_student['stream']."
</td></tr>  <tr> <td> GRADE  </td><td>".$data_student['grade']." ".$data_student['class']."
</td></tr>";

echo "</table>";
echo "</div>";
include 'footer.php';?>
</body>
</html>