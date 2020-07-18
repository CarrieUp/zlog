<?php
session_start();
include "conn.php";
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
    <a href="myblog.php">Zlog</a>
</div>

<table class="topbar">
    <tr>
        <td><a href="my_homepage.php" class="bar">My Blogs</a></td>
        <td><a href="post.php" class="bar">Post a Blog</a></td>
        <td><a href="logout.php" class="bar">Log out</a></td>
    </tr>
</table>
<?php
$name=$_SESSION['username'];
$sql=mysqli_query($conn,"SELECT id,title,subtime FROM post WHERE author='".$_SESSION['username']."' ORDER BY id DESC");

echo '<table class="myblog" border="1"><tr class="fline"><td>Title</td><td>Subtime</td></tr>';
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
    echo "<tr><td>{$row['title']} </td> ".//把$row['title']GET过去？
         "<td>{$row['subtime']} </td> ".
         "</tr>";
}
echo '</table>';
?>
</body>
</html>