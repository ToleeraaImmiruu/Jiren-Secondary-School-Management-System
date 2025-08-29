<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/manage_users.css">
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>
 <?php
 include './header.php';
?>
<div class="layout">

<?php

include './left_dash.php';
include('../../Common/databases/db_connection.php');
$sql="SELECT * FROM teacher";
$result = mysqli_query($con,$sql);


echo "<table class='teachers'>
<tr>
<th class='title' colspan='12'>TEACHERS</th>
</tr>

<tr>
<th class='subtitle'>ID</th>
<th class='subtitle'>NAME</th>
<th class='subtitle'>USER</th>
<th class='subtitle'>EMAIL</th>
<th class='subtitle'>PHONE</th>
<th class='subtitle'>SUB_CODE</th>
<th class='subtitle'>GRADE</th>
<th class='subtitle'>CLASS</th>
<th class='subtitle'>PHOTO</th>
<th class='subtitle'>EDIT</th>
<th class='subtitle'>DELETE</th>
</tr>
";
while($data=mysqli_fetch_array($result)){
echo "<tr>
<td>".$data['teacher_id']."</td>
<td>".$data['fullname']."</td>
<td>".$data['username']."</td>
<td>".$data['email']."</td>
<td>0".$data['phone_number']."</td>
<td>".$data['subject_code']."</td>
<td>".$data['grade']."</td>
<td>".$data['classes']."</td>
<td><img class='photo' width='50' height='50' title='Click for a bigger view' src='data:image/*;base64,".base64_encode($data['photo'])."'></td>
<td><a href='../edit/edit_teacher_data.php?id={$data['teacher_id']}'><img class='edit' width='20' height='20' src='../images/edit.svg'></a></td>
<td><a href='./delete_teacher.php?id={$data['teacher_id']}'><img class='delete' width='20' height='20' src='../images/delete.svg'></a></td>

</tr>";
};
?>    

<!-- Popup element -->
<img id="popup" class="popup" style="display:none;" src="" alt="Popup Image">
<form action="" method="get">

</div>
<script src="../js/manage_users.js"></script>
</body>
</html>