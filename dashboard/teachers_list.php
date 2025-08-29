<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/userlist.css" type="text/css">
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>
    <?php
    include ("./header.php");?>
    <div class="layout">
    <?php
    include ("./left_dash.php");
    ?>

<?php
include('../../Common/databases/db_connection.php');

$sql_student="SELECT * FROM users WHERE role='student'";
$sql_teacher="SELECT * FROM users WHERE role='teacher'";
$sql_director="SELECT * FROM users WHERE role='director'";


$result_student=mysqli_query($con,$sql_student);
$result_teacher=mysqli_query($con,$sql_teacher);
$result_director=mysqli_query($con,$sql_director);

echo"<table  class='teachers'>
<tr>
<th colspan='2' class='title'>TEACHERS</th>
</tr>

<tr>
<th class='subtitle'>FULL NAME</th>
<th class='subtitle'>ID</th>
</tr>
";
while($data_teacher=mysqli_fetch_array($result_teacher)){
echo "<tr><td>".$data_teacher['fullname']."</td>";
echo "<td>".$data_teacher['id']."</td></tr>";}
echo"</table>";
?>
    </div>
</body>
</html>