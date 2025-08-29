<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "users");
if($con){

}
else{
echo "connection unsuccesful <br>";
}
?>