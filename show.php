<?php
include "conn.php";
$sql=mysqli_query($conn,"SELECT * FROM post ORDER BY id DESC");

echo '<table border="1" class="showblog"><tr class="fline"><td>Title</td><td>Author</td><td>Subtime</td></tr>';
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
    echo "<tr><td>{$row['title']} </td> ".
         "<td>{$row['author']} </td> ".
         "<td>{$row['subtime']} </td> ".
         "</tr>";
}
echo '</table>';
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</body>
</html>