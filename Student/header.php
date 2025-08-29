<?php
 session_start();
 if(isset($_SESSION['login_test']) && $_SESSION['login_test']=='student'){
     $name=$_SESSION['fullname'];
     $image=$_SESSION['photo'];
     $username=$_SESSION['username'];
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/student.css" />
</head>
<body>
<header class="header">
    <nav class="menu-bar">
      <ul>
        <li><a href="student.php">HOME</a></li>
        <li><a href="academic_result.php">ACADEMIC RESULT</a></li>
        <li><a href="announcement_student.php">ANNOUNCEMENTS</a></li>
        <li><a href="support.php">SUPPORT </a></li>
        <li><a href="profile.php">PROFILE </a></li>
      </ul>
      
      <div class="user">
    
        <?php
            echo"
            <h2>$name</h2>
            <img  id='teacher' src='data:image/*;base64,".base64_encode($image)."'>
            ";?>
    </div>
    
    <a href="../Common/databases/logout.php"><button>LOG OUT</button></a>
    </div>  
    </nav>
  </header> 
</body>
</html>
<?php }
else{
header("location:../Common/login.php");
exit();
}