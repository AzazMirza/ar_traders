<?php
include 'connection.php';

$number = $_POST["number"];
$name = $_POST["name"];

$sql = "INSERT INTO `test` (number, name) VALUES (" . $number . ", '" . $name . "')";
$result = $con->query($sql);
?>
<?php

$data = json_decode(file_get_contents('php://input'), true);
$lastNumber = $data['lastNumber'];
$userName = $data['userName'];

// Insert data into the database
$query = "INSERT INTO `test` (number, name) VALUES ('$lastNumber', '$userName')";
$result = mysqli_query($connection, $query);

if ($result) {
    echo json_encode(['message' => 'Data inserted successfully']);
} else {
    echo json_encode(['error' => 'Error inserting data']);
}


?>
