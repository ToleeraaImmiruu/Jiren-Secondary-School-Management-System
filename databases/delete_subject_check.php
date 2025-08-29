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
$sub_code=$_SESSION['sub_code']=$_GET['sub_code'];


$sql_check="SELECT subject_name FROM subject WHERE subject_code=$sub_code";
$result=mysqli_query($con,$sql_check);
$data=mysqli_fetch_array($result);
$name=$data['subject_name'];
echo"<div class='delete_layout'>";
include '../dashboard/left_dash.php';
echo"<div class='delete_container'>
<h2 class='delete_h2'>ARE YOU SURE?<br> DO YOU WANT TO DELETE $name <br>FROM SUBJECTS DATABASE</h2>"?>
<form action="./delete_subject.php" method="get" id="check">
<input class='delete_input' type="text" name="name" id="name" value="<?php echo $name; ?>">
<input type="submit" value="DELETE">
</form>
</div>
</div>
</body>
</html>