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
</script>
</head>

<body>
<div class="logo">
    <a href="#">Zlog</a>
</div>

<table class="topbar">
    <tr>
        <td><a href="my_homepage.php" class="bar">My Blogs</a></td>
        <td><a href="post.php" class="bar">Post a Blog</a></td>
        <td><a href="logout.php" class="bar">Log out</a></td>
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