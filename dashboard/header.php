<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['login_test']) && $_SESSION['login_test']=='director'){
    $name=$_SESSION['fullname'];
    $image=$_SESSION['photo'];
    ?>
<div class="header">
    <div class="title"><h2><i class="fa-solid fa-table-cells-large "></i> DASHBOARD</h2></div>
    
    <ul>
    <?php
        echo"
        <li id='welcome'><p>WELCOME !</p><h2>$name</h2></li>
        <img  src='data:image/*;base64,".base64_encode($image)."'>
        
        ";?>
        <li><input type="text" class="main" placeholder="Search User" id='user_search'></li>
        <li><button id="search">SEARCH</button></li>
        <div class="admin">
  
       
        
        </div>
       <li class='btn'><a href="../../Common/databases/logout.php"><button>LOG OUT</button></a></li>
    </ul>
</div>
<?php
}
else{
header("location: ../../Common/login.php");
}?>

</body>
</html>