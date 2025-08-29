<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/subjectlist.css" type="text/css">
</head>
<body>
 
<?php
session_start();
include('../../Common/db_connection.php');

$sql_9="SELECT * FROM subject WHERE grade='9'";
$sql_10="SELECT * FROM subject WHERE grade='10'";
$sql_11="SELECT * FROM subject WHERE grade='11'";
$sql_12="SELECT * FROM subject WHERE grade='12'";

$result_9=mysqli_query($con,$sql_9);
$result_10=mysqli_query($con,$sql_10);
$result_11=mysqli_query($con,$sql_11);
$result_12=mysqli_query($con,$sql_12);

echo"<table class='grade_9'>
<tr>
<th colspan='3' class='title'>SUBJECTS FROM GRADE-9</th>
</tr>

<tr>
<th class='subtitle'>SUBJECT CODE</th>
<th class='subtitle'>SUBJECT NAME</th>
<th class='subtitle'>GRADE</th>
<th class='subtitle'>EDIT</th>
<th class='subtitle'>DELETE</th>


</tr>
";

while($data_9=mysqli_fetch_array($result_9)){
echo "<tr><td>".$data_9['subject_name']."</td>
<td>".$data_9['subject_code']."</td>
<td>".$data_9['grade']."</td>
<td><a href='../admin/EDIT/edit_subject.php? sub_code={$data_9['subject_code']}'><img class='edit' width='20' height='20' src='../images/edit.svg'></a></td>
<td><a href='./delete_subject_check.php? sub_code={$data_9['subject_code']}'><img class='delete' width='20' height='20' src='../images/delete.svg'></a></td></tr>";
}
echo"</table>";



echo"<table class='grade_10'>
<tr>
<th colspan='3' class='title'>SUBJECTS FROM GRADE-10</th>
</tr>

<tr>
<th class='subtitle'>SUBJECT CODE</th>
<th class='subtitle'>SUBJECT NAME</th>
<th class='subtitle'>GRADE</th>
<th class='subtitle'>EDIT</th>
<th class='subtitle'>DELETE</th>
</tr>
";


while($data_10=mysqli_fetch_array($result_10)){
$_SESSION['sub_code']=$data_10['subject_code'];
echo "<tr><td>".$data_10['subject_name']."</td>
<td>".$data_10['subject_code']."</td>
<td>".$data_10['grade']."</td><td><a href='../admin/EDIT/edit_subject.php? sub_code={$data_10['subject_code']}'><img class='edit' width='20' height='20' src='../images/edit.svg'></a></td>
<td><a href='./delete_subject_check.php? sub_code={$data_10['subject_code']}'><img class='delete' width='20' height='20' src='../images/delete.svg'></a></td></tr>";
}
echo"</table>";



echo"<table class='grade_11'>
<tr>
<th colspan='4' class='title'>SUBJECTS FROM GRADE-11</th>
</tr>

<tr>
<th class='subtitle'>SUBJECT CODE</th>
<th class='subtitle'>SUBJECT NAME</th>
<th class='subtitle'>GRADE</th>
<th class='subtitle'>STREAM</th>
<th class='subtitle'>EDIT</th>
<th class='subtitle'>DELETE</th>
</tr>
";


while($data_11=mysqli_fetch_array($result_11)){
$_SESSION['sub_code']=$data_11['subject_code'];
echo "<tr><td>".$data_11['subject_name']."</td>
<td>".$data_11['subject_code']."</td>
<td>".$data_11['grade']."</td>
<td>".$data_11['stream']."</td><td><a href='../admin/EDIT/edit_subject.php? sub_code={$data_11['subject_code']}'><img class='edit' width='20' height='20' src='../images/edit.svg'></a></td>
<td><a href='./delete_subject_check.php? sub_code={$data_11['subject_code']}'><img class='delete' width='20' height='20' src='../images/delete.svg'></a></td></tr>";
}
echo"</table>";


echo"<table class='grade_12'>
<tr>
<th colspan='4' class='title'>SUBJECTS FROM GRADE-12</th>
</tr>

<tr>
<th class='subtitle'>SUBJECT CODE</th>
<th class='subtitle'>SUBJECT NAME</th>
<th class='subtitle'>GRADE</th>
<th class='subtitle'>STREAM</th>
<th class='subtitle'>EDIT</th>
<th class='subtitle'>DELETE</th>
</tr>
";


while($data_12=mysqli_fetch_array($result_12)){
$_SESSION['sub_code']=$data_12['subject_code'];
echo "<tr><td>".$data_12['subject_name']."</td>
<td>".$data_12['subject_code']."</td>
<td>".$data_12['grade']."</td>
<td>".$data_12['stream']."</td><td><a href='../admin/EDIT/edit_subject.php? sub_code={$data_12['subject_code']}'><img class='edit' width='20' height='20' src='../images/edit.svg'></a></td>
<td><a href='./delete_subject_check.php? sub_code={$data_12['subject_code']}'><img class='delete' width='20' height='20' src='../images/delete.svg'></a></td></tr>";
}
echo"</table>";
?>




</body>
</html>