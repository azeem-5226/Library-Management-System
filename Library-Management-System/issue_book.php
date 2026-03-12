<?php
include 'config/db.php';

if(isset($_POST['submit'])){

$student=$_POST['student'];
$book=$_POST['book'];

$date=date("Y-m-d");

$sql="INSERT INTO issued_books(student_name,book_id,issue_date)
VALUES('$student','$book','$date')";

mysqli_query($conn,$sql);

mysqli_query($conn,"UPDATE books SET quantity=quantity-1 WHERE id='$book'");

echo "Book Issued Successfully";

}
?>

<html>

<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Issue Book</h2>

<form method="POST">

<input type="text" name="student" placeholder="Student Name" required>

<select name="book">

<?php

$result=mysqli_query($conn,"SELECT * FROM books WHERE quantity>0");

while($row=mysqli_fetch_assoc($result)){

echo "<option value=".$row['id'].">".$row['title']."</option>";

}

?>

</select>

<button name="submit">Issue Book</button>

</form>

</body>
</html>