<?php
include 'connection.php';
$sql = "SELECT DISTINCT c_name FROM clients WHERE c_name LIKE '%" . $_POST['searchClient'] . "%'";
$result = $con->query($sql);

if ($result) {
  while($row = $result->fetch_assoc()) {
    echo "<li class = 'cname'>" . $row["c_name"] . "</li>";
  }
}
else {
  echo "<li>No results found</li>";
}
?>