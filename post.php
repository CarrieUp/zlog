<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo("<script>alert('Please log in first!');</script>");
?>
<script>
    window.location.href="index.php";
</script>
<?php
        exit();
    }
?>

<html>
<head>
<title><?php echo $_SESSION['username']."'s Blog"; ?></title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function check(){
    if(title.value===""){
        alert("Title cannot be empty!");
        return false;
    }
    if(content.value===""){
        alert("Content cannot be empty!");
        return false;
    }
}
</script>
</head>

<body>
<div class="logo">
    <a href="myblog.php">Zlog</a>
</div>

<table class="topbar">
    <tr>
        <td><a href="my_homepage.php" class="bar">My Blogs</a></td>
        <td><a href="post.php" class="bar">Post a Blog</a></td>
        <td><a href="logout.php" class="bar">Log out</a></td>
    </tr>
</table>

<form name="post" method="post" action="do_post.php">
    <table class="post">
        <tr>
            <td>Title:</td>
            <td><input name="title" id="title" type="text" maxlength="100" size="60"></td>
        </tr>
        <tr>
            <td>Category:</td>
            <td><select name="category" id="category">
                <option value="news">News</option>
                <option value="sports">Sports</option>
                <option value="entertainment">Entertainment</option>
                <option value="technology">Technology</option>
                <option value="lifestyle">Lifestyle</option>
                </select></td>
        </tr>
        <tr>
            <td>Content:</td>
            <td><textarea name="content" id="content" cols="70" rows="30"></textarea></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" value="Submit" onClick="return check()"><input type="reset" value="Reset"></td>
        </tr>
    </table>
</form>
</body>
</html>