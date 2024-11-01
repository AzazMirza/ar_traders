<?php
include 'connection.php';
include 'read.php';
$name = $_POST['name'];

$query = "UPDATE your_table SET column1 = 'new_value' WHERE name = '$name'";
?>
<form method="post" action="update.php">
    Name: <input type="text" name="name">
    <input type="submit" name="update" value="Update">
</form>