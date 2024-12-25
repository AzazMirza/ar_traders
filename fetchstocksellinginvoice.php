<?php
include 'connection.php';

// Fetch max invoice from the stock table
$sql = "SELECT MAX(invoice) AS max_invoice FROM `stocksales`";
$result = mysqli_query($con, $sql);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $maxInvoice = $row['max_invoice'];

  // Return the max invoice number
  echo $maxInvoice;
} else {
  echo 'Error fetching max invoice';
}
?>
