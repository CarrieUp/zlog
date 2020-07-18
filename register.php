<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function check_pwd(){
    if(pwd.value!==pwd2.value){
        alert("Please make sure your passwords match.");
        pwd.value="";
        pwd2.value="";
    }
}
function check_reg(){
    if(user.value===""){
        alert("Username can not be emtpy.");
        return false;
    }
    if(pwd.value===""){
        alert("Password can not be emtpy.");
        return false;
    }
    if(pwd.value.length<4){
        alert("Password should have at least 4 characters.");
        return false;
    }
}
</script>
</head>

<body>
<div class="logo">
    <a href="http://39.97.109.11">Zlog</a>
</div>

<form action="do_register.php" method="POST">
    <table>
        <tr>
            <td>Username:</td>
            <td><input id="user" name="user" type="text" maxlength="10"><font color="red">*</font></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input id="pwd" name="pwd" type="password" maxlength="12"><font color="red">*</font></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input id="pwd2" type="password" maxlength="8" onBlur="check_pwd()"><font color="red">*</font></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" value="Male">Male&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="Female">Female</td>
        </tr>
    </table>
    <input type="submit" value="Sign up" onClick="return check_reg();">
</form>
</body>
</html>
