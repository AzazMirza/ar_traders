<?php
include 'connection.php';
// Query create karein

$sql = "SELECT Rate FROM `items` WHERE Iname='" . $_POST['name'] . "'";
$result = $con->query($sql);

if ($result) {
  while($row = $result->fetch_assoc()) {
    echo $row["Rate"];
  }
}
else {
  echo "0 results";
}
?>
