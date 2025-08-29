<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../Teacher/css/announcement_teacher.css'>
</head>
<body>

<?php
include("header.php");
echo"<h1 class='title'>ANNOUNCEMENTS</h2>";
include("../common/databases/db_connection.php");
$sql_header="SELECT title FROM announcement where announcement_for='student' ORDER BY id DESC";
$result_header=mysqli_query($con,$sql_header);

$header=array();
while($data_header=mysqli_fetch_array($result_header)){
array_push($header,$data_header['title']);
}

$sql_body="SELECT body FROM announcement where announcement_for='student'  ORDER BY id DESC";
$result_body=mysqli_query($con,$sql_body);

$body=array();
while($data_body=mysqli_fetch_array($result_body)){
    array_push($body,$data_body['body']);
    }

for($i=0;$i<sizeof($header);$i++){
echo"<div class='container'>";
echo"<h1 class='header'>$header[$i]</h1>";
echo"<p class='body'>$body[$i]</p>";
echo"</div>";
}



?>  
</body>
</html>