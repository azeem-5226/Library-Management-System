<?php
include 'config/db.php';
?>

<html>

<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Issued Books</h2>

<table>

<tr>

<th>ID</th>
<th>Student</th>
<th>Book ID</th>
<th>Issue Date</th>
<th>Return Date</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM issued_books");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['student_name']."</td>";

echo "<td>".$row['book_id']."</td>";

echo "<td>".$row['issue_date']."</td>";

echo "<td>".$row['return_date']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>