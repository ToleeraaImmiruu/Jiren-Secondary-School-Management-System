<?php
$con_mark=mysqli_connect("localhost","root","");
mysqli_select_db($con_mark,"marks");
if($con_mark){

}
else{
echo "connection unsuccesful <br>";
}
?>