<?php
include 'connection.php';
// Query create karein

$sql = "SELECT Quantity FROM `stock` WHERE Iname='" . $_POST['name'] . "'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo $row["Quantity"];
  }
}
else {
  echo "0 results";
}
?>
