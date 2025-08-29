<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRS SYSTEM</title>
    <link rel="stylesheet" href="../css/form.css" type="text/css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['stream'])){
echo("<h3>".$_SESSION['stream']." </h3>");
unset($_SESSION['stream']);
}
if(isset($_SESSION['subject'])){
    echo("<h3>".$_SESSION['subject']." </h3>");
    unset($_SESSION['subject']);
    }
?>
<div class="container">
<h1>ADDITIONAL INFORMATION</h1>
<form action="../databases/teacher_form_db.php" method="post" enctype="multipart/form-data" id="teacherForm">
   
<div class="phone#">
<label for="phone" class="label">PHONE NUMBER</label> <br>
<div class="line">
<input type="text" name="phone" id="phone" placeholder="eg: 0922438536">
<img src="" alt="v" id="iphone">
</div>
<div id="ephone" class="error">error</div>
</div>

<div class="stream">
<label for="stream" class="label">STREAM</label> <br>
<div class="line">
<input type="text" name="stream" id="stream" placeholder="eg: natural science">
<img src="" alt="v" id="istream">
</div>

<div id="estream" class="error">error</div>
</div>

<div class="grade">
<label for="grade" class="label">TEACHES GRADE</label> <br>
<div class="line">
<input type="number" name="grade" id="grade" min="9" max="12" placeholder="eg: 9">
<img src="" alt="v" id="igrade">
</div>

<div id="egrade" class="error">error</div>
</div>

<div class="subject">
<label for="class" class="label">SUBJECT</label> <br>
<div class="line">
<input type="text" name="subject" id="subject" placeholder="eg: biology">
<img src="" alt="v" id="isubject">
</div>

<div id="esubject" class="error">error</div>
</div>

<div class="class">
<label for="class" class="label">ASSIGNED CLASSES</label> <br>
<div class="line">
<input type="text" name="class" id="class" placeholder="eg: A, B, C">
<img src="" alt="v" id="iclass">
</div>

<div id="eclass" class="error">error</div>
</div>

<div class="background">
<label for="background" class="label">BACKGROUND INFORMATION</label> <br>
<textarea name="background" id="background" placeholder="optional"></textarea>
<img src="" alt="v" id="iback">
<div id="eback" class="error">error</div>
</div>

<div class="btn">
<input type="submit" value="REGISTER">
<input type="reset" value="CLEAR" id="clear"> 
</div>


</form>
</div>

<script src="../js/teacher_form.js"></script>
</body>
</html>