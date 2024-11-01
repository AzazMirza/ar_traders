<?php
include 'connection.php';
// Query create karein
$sql = "SELECT salePrice FROM `items` WHERE Iname='" . $_POST['name'] . "'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo $row["salePrice"];
  }
}
else {
  echo "0 results";
}
?>