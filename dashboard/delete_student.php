<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/delete.css">
</head>
<body>
<?php
include '../dashboard/header.php';


include('../../Common/databases/db_connection.php');
$_SESSION['id']=$id=$_GET['id'];
$_SESSION['user_type']='student';

$sql_check="SELECT fullname FROM student WHERE student_id=$id";
$result=mysqli_query($con,$sql_check);
$data=mysqli_fetch_array($result);
$name=$data['fullname'];
echo"<div class='delete_layout'>";
include '../dashboard/left_dash.php';
echo"<div class='delete_container'>
<h2 class='delete_h2'>ARE YOU SURE?<br> DO YOU WANT TO DELETE $name <br>FROM STUDENTS DATABASE</h2>"?>
<form action="../databases/delete.php" method="get" id="check">
<input type="text" name="name" id="name" value="<?php echo $name; ?>">
<input type="submit" value="DELETE">
</form>
</div>
</div>

</body>
</html>