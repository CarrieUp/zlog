<!DOCTYPE html>
<html>
<head>
<title>Zlog</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function check_log(){
    if(user.value===""){
        alert("Please fill in username.");
        return false;
    }
    if(pwd.value===""){
        alert("Please fill in password.");
        return false;
    }
}
</script>
</head>

<body>
<div class="logo">
    <a href="#">Zlog</a>
</div>

<table class="login">
    <tr>
        <td>
            <form action="check_login.php" method="POST">
                Username:<input type="text" id="user" name="user" maxlength="10">
                Password:<input type="password" id="pwd" name="pwd" maxlength="12">
                <input type="submit" value="Log in" onClick="return check_log()">
            </form>
        </td>
        <td>
            <button type="button"><a href="register.php">Sign up</a></button>
        </td>
    </tr>
</table>

<div class="leftbar">
    <table>
        <tr>
            <td><a href="show.php" target="show">Latest posts</a></td>
        </tr>
        <tr>
            <td><a href="show.php?category='news'" target="show">News</a></td>
        </tr>
        <tr>
            <td><a href="show.php?category='news'" target="show">Sports</a></td>
        </tr>
        <tr>
            <td><a href="show.php?category='news'" target="show">Entertainment</a></td>
        </tr>
        <tr>
            <td><a href="show.php?category='news'" target="show">Technology</a></td>
        </tr>
        <tr>
            <td><a href="show.php?category='news'" target="show">Lifestyle</a></td>
        </tr>
    </table>
</div>

<iframe src="show.php" name="show" class="frame"></iframe>

</body>
</html>
