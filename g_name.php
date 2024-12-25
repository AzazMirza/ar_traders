<?php
include 'connection.php';
// Query create karein
$sql = "SELECT g_name FROM `items` WHERE Iname='" . $_POST['name'] . "'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo $row["g_name"];
  }
}
else {
  echo "0 results";
}
?>
