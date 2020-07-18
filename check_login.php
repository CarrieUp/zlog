<?php
session_start();
include "conn.php";
$userName=$_POST[user];
$passWord=$_POST[pwd];
$sql=mysqli_query($conn,"SELECT * FROM user WHERE username='$userName' AND password='$passWord'");
$res=mysqli_fetch_row($sql);
if($res!=false){
    $_SESSION['username']=$userName;
    echo("<script>alert('You have logged in!');</script>");
?>
<script>
    window.location.href="myblog.php";//when this is in echo,it didn't work
</script>
<?php
}else{
    echo("<script>alert('Wrong username or password.');history.go(-1);</script>");
}
?>