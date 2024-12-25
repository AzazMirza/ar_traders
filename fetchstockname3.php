
<?php
include 'connection.php';
// Query create karein
$sql = "SELECT Distinct Iname FROM `items` WHERE Iname LIKE '%" . $_POST['search3'] . "%'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo "<li class='results' id='d3'>" . $row["Iname"] . "</li>";
  }
}
else {
  echo "<div id='d3'>No results found</div>";
}
?>