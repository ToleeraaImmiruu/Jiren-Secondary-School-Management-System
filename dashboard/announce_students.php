

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/announcement.css">
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>
<?php
include("./header.php");?>
<div class="layout">
<?php
include("./left_dash.php");?>

<form action="../databases/announcement_db.php" method='post' id='announcementForm'>
       
  
       <input type="text" name="title" id="title" placeholder="Title">
       <textarea name="body" id="body" >
       </textarea>
       <div class="for">
         <input type="radio" name='for' value="student" checked=checked> STUDENT
         <input type="radio" name='for' value="teacher"> TEACHER
         </div>
       <input type="submit" value="POST" id="post">
   </form>

</div>
   
  <script language='javascript' src='../js/announcement.js'></script>
</body>
</html>