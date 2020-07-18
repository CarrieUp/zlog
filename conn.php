<?php
$conn = mysqli_connect('localhost','root','wy001122');
if(!$conn){
    die('Could not connect to MySQL:'.mysqli_error($conn));
}
mysqli_select_db($conn,'blog');
?>