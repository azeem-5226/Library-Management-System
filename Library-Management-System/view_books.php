<?php
include 'config/db.php';
?>

<html>

<head>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<h2>Available Books</h2>

<table>

<tr>

<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Quantity</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM books");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['title']."</td>";

echo "<td>".$row['author']."</td>";

echo "<td>".$row['quantity']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>