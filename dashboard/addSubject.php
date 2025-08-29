<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/add_subject.css" type="text/css">
</head>
<body
    <?php
    include '../dashboard/header.php'?>
    <div class="layout">
        <?php
        include '../dashboard/left_dash.php'
        ?>
 <div class="container">
 <?php
        if(isset($_SESSION['status'])){
        echo("<h3 id='status'>".$_SESSION['status']." !</h3>");
        unset($_SESSION['status']);
        }?>
<h1>ADD SUBJECT</h1>
<form action="../databases/add_Subject_db.php" method="post" enctype="multipart/form-data" id="addsubject">
<div class="subject_name">
<label for="subname" class="label">SUBJECT NAME</label> <br>
<input type="text" name="subname" id="subname" placeholder="eg: biology">
<img src="" alt="v" id="isubname" class="image">
<div id="esubname" class="error">error</div>
</div>
<div class="grade">
<label for="grade" class="label">GRADE</label> <br>
<input type="number" name="grade" id="grade" min="9" max="12" placeholder="eg: 9">
<img src="" alt="v" id="igrade" class="image">
<div id="egrade" class="error">error</div>
</div>

<div class="stream notVisible">
<label for="stream" class="label">STREAM</label> <br>
<input type="text" name="stream" id="stream" placeholder="eg: natural science">
<img src="" alt="v" id="istream" class="image">
<div id="estream" class="error">error</div>
</div>

<div class="button">
<input type="submit" value="   ADD   ">
<input type="reset" value="CLEAR"> 
</div>

</form>
</div>
<script src="../js/add_subject.js"></script>
    </div>
    
</body>
</html>