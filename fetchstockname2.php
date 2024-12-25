
<?php
include 'connection.php';
// Query create karein
$sql = "SELECT Distinct Iname FROM `items` WHERE Iname LIKE '%" . $_POST['search2'] . "%'";
$result = $con->query($sql);

if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo "<li class='results' id='d2'>" . $row["Iname"] . "</li>";
  }
}
else {
  echo "<div id='d2'>No results found</div>";
}
?>