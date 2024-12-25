<?php
include 'connection.php';

$c_name = $_POST['name'];
$address = $_POST['address'];
$credit = $_POST['credit'];

$phone = $_POST['phone'];
$cnic = $_POST['cnic'];
$ntn = $_POST['ntn'];
$shopname = $_POST['shopname'];
$personname = $_POST['personname'];
$city = $_POST['city'];

if (!empty($c_name)){
        $sql = "INSERT INTO `clients` (c_name, address, credit, phone, cnic, ntn, shopname, personname, city) 
        VALUES ('$c_name', '$address', '$credit', '$phone', '$cnic', '$ntn', '$shopname', '$personname', '$city')";

        if ($con->query($sql) === TRUE) {
            // echo "Client $c_name added successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    } else {
        echo "Please Enter a Client Name";
    }
?>