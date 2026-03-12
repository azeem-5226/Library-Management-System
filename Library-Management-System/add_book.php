<?php
include 'config/db.php';

if(isset($_POST['submit'])){

$title=$_POST['title'];
$author=$_POST['author'];
$quantity=$_POST['quantity'];

$sql="INSERT INTO books(title,author,quantity)
VALUES('$title','$author','$quantity')";

mysqli_query($conn,$sql);

echo "Book Added Successfully";

}
?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<h2>Add New Book</h2>

<form method="POST">

<input type="text" name="title" placeholder="Book Title" required>

<input type="text" name="author" placeholder="Author Name" required>

<input type="number" name="quantity" placeholder="Quantity" required>

<button name="submit">Add Book</button>

</form>

</body>
</html>