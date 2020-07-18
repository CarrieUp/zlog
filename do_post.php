<?php
session_start();
include "conn.php";
$title=$_POST[title];
$category=$_POST[category];
$content=$_POST[content];
$author=$_SESSION['username'];
$subtime=date("Y-m-d H:i:s");

$sql="INSERT INTO post (title,category,content,author,subtime) VALUES ('$title','$category','$content','$author','$subtime')";
$res=mysqli_query($conn,$sql);
if($res){
    echo("<script>alert('You have posted a blog!');history.go(-2);</script>");
}else{
    //echo("<script>alert('Please try again!');history.go(-1);</script>";
    die('ERROR: ' . mysqli_error($conn));
}
?>