<?php
include "conn.php";
$userName=$_POST[user];
$sql=mysqli_query($conn,"SELECT * FROM user WHERE username='$userName'");
$res=mysqli_fetch_row($sql);//没用array
if($res!=false){
    echo("<script>alert('This Username is not available.');history.go(-1);</script>");
    exit();
}

$username=$_POST[user];
$password=$_POST[pwd];
$gender=$_POST[gender];

$insert=mysqli_query($conn,"INSERT INTO user(username,password,gender)VALUES('$username','$password','$gender')");
echo("<script>alert('Your account has been created!');history.go(-2);</script>");
?>