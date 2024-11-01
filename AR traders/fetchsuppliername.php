<?php
include 'connection.php';
// Query create karein
$sql = "SELECT Distinct s_name FROM `supplier` WHERE s_name LIKE '%" . $_POST['searchSupplier'] . "%'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo "<li class='sname' >" . $row["s_name"] . "</li>";
  }
}
else {
  echo "<li>No results found</li>";
}
?>