<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRS SYSTEM</title>
    <link rel="stylesheet" href="./css/logIn.css" type="text/css">
</head>
<?php
session_start();

if(isset($_SESSION['display_message'])){
echo("<h3>".$_SESSION['display_message']." </h3>");
unset($_SESSION['display_message']);
}
else{
echo"<div class='margin'></div>";
}
?>
<body>
<div class="container">
<h1>LOG IN</h1>
<form action="./databases/logIn_db.php" method="post" enctype="multipart/form-data" id="loginForm">

<div class="userName">
<label for="username" class="label">USERNAME</label> <br>
<input type="text" name="username" id="username" placeholder="User Name">
<div id="uname" class="error">error</div>
</div>


<div class="email">
<label for="email" class="label">EMAIL</label> <br>
<input type="email" name="email" id="email" placeholder="Email">
<div id="pemail" class="error">error</div>
</div>


<div class="pass">
<label for="password" class="label">PASSWORD</label> <br>
<input type="password" name="password" id="password" placeholder="Password">
<div id="pass" class="error">error</div>
</div>


<div class="btn">

<input type="submit" value="LOG IN">
<input type="reset" value="CLEAR"> 
</div>

</form>
</div>

<script src="./js/logIn.js"></script>
</body>
</html>