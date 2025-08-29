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
echo("<h3>".$_SESSION['stream']." !</h3>");
unset($_SESSION['stream']);
}
?>
<div class="container">
<h1>ADDITIONAL INFORMATION</h1>
<form action="../databases/student_form_db.php" method="post" enctype="multipart/form-data" id="studentForm">
   
<div class="phone#">
<label for="phone" class="label">PHONE NUMBER</label> <br>
<div class="line">
<input type="text" name="phone" id="phone" placeholder="eg: 0922438536">
<img src="" alt="v" id="iphone">
</div>

<div id="ephone" class="error">error</div>
</div>

<div class="stream notVisible">
<label for="stream" class="label">STREAM</label> <br>
<div class="line">
<input type="text" name="stream" id="stream" placeholder="eg: natural science">
<img src="" alt="v" id="istream">
</div>
<div id="estream" class="error">error</div>
</div>


<div class="grade">
<label for="grade" class="label">GRADE</label> <br>
<div class="line">
<input type="number" name="grade" id="grade" min="9" max="12" placeholder="eg: 9">
<img src="" alt="v" id="igrade">
</div>

<div id="egrade" class="error">error</div>
</div>


<div class="class">
<label for="class" class="label">CLASS</label> <br>
<div class="line">
<input type="text" name="class" id="class" placeholder="eg: C">
<img src="" alt="v" id="iclass">
</div>
<div id="eclass" class="error">error</div>
</div>


<div class="btn">
<input type="submit" value="REGISTER">
<input type="reset" value="CLEAR" id="clear"> 
</div>

</form>
</div>

<script src="../js/student_form.js"></script>
</body>
</html>