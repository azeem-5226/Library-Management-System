<?php
include 'config/db.php';

if(isset($_POST['submit'])){

$id=$_POST['id'];

$date=date("Y-m-d");

mysqli_query($conn,"UPDATE issued_books SET return_date='$date' WHERE id='$id'");

$result=mysqli_query($conn,"SELECT book_id FROM issued_books WHERE id='$id'");
$row=mysqli_fetch_assoc($result);

$book=$row['book_id'];

mysqli_query($conn,"UPDATE books SET quantity=quantity+1 WHERE id='$book'");

echo "Book Returned Successfully";

}
?>

<html>

<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Return Book</h2>

<form method="POST">

<select name="id">

<?php

$result=mysqli_query($conn,"SELECT * FROM issued_books WHERE return_date IS NULL");

while($row=mysqli_fetch_assoc($result)){

echo "<option value=".$row['id'].">Issue ID ".$row['id']."</option>";

}

?>

</select>

<button name="submit">Return Book</button>

</form>

</body>
</html>