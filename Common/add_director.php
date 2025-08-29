<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRS SYSTEM</title>
    <link rel="stylesheet" href="./css/signUp.css" type="text/css">
</head>
<body>
 
   
<?php
session_start();

if(isset($_SESSION['invalid_username'])){
    echo("<h3>".$_SESSION['invalid_username']." !</h3>");
    unset($_SESSION['invalid_username']);
}

?>

<div class="container">
<h1>ADD USER</h1>
<form action="./databases/add_director_db.php" method="post" enctype="multipart/form-data" id="signupForm">
<div class="fullName">
<label for="fullname" class="label">FULL NAME</label> <br>
<div class="line">
<input type="text" name="fullname" id="fullname" placeholder="eg: yohannes negero">
<img src="" alt="v" id="ifname">
</div>
<div id="fname" class="error">error</div>
</div>

<div class="userName">
<label for="username" class="label">USERNAME</label> <br>
<div class="line">
<input type="text" name="username" id="username" placeholder="eg: yohannes">
<img src="" alt="v" id="iuname">
</div>

<div id="uname" class="error">error</div>
</div>


<div class="email">
<label for="email" class="label">EMAIL</label> <br>
<div class="line">
<input type="email" name="email" id="email" placeholder="eg: john1@gmail.com">
<img src="" alt="v" id="iemail">
</div>

<div id="pemail" class="error">error</div>
</div>


<div class="pass">
<label for="password" class="label">CREATE PASSWORD</label> <br>
<div class="line">
<input type="password" name="password" id="password" placeholder="">
<img src="" alt="v" id="ipass">
</div>

<div id="pass" class="error">error</div>
</div>

<div class="cpass">
<label for="password" class="label">CONFIRM PASSWORD</label> <br>
<div class="line">
<input type="password" name="cpassword" id="cpassword" placeholder="">
<img src="" alt="v" id="icpass">
</div>
<div id="cpass" class="error">error</div>
</div>


<div class="image">
<label for="image" class="label">INSERT IMAGE</label> <br>
<div class="line">
<div class="file" border="2px">
<input type="file" name="image" id="image" accept="image/*" placeholder="eg: jo.jpg">
</div>
<img src="" alt="v" id="iimage">
</div>

<div id="pimage" class="error">error</div>
</div>

<input type="text" id="role" name="role" value="director">

<div class="btn">
<input type="submit" value="REGISTER" >
<input type="reset" value="CLEAR" id="clear"> 
</div>

</form>
</div>
  
<script src="./js/signUp.js"></script>
</body>
</html>