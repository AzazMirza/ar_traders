<?php
include 'connection.php';
$result = mysqli_query($con, "SELECT invoice FROM `stock` ORDER BY invoice DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);
$lastinvoice = $row['invoice'];

echo $lastinvoice;
?>

<?php
// include 'connection.php';

// // Replace 'stock' with your actual table name and 'invoice' with your actual column name
// $result = mysqli_query($con, "SELECT invoice FROM stock ORDER BY invoice DESC LIMIT 1");

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row['invoice'];
// }
?>
