<?php
include 'connection.php';

$s_name = $_POST['name'];
$address = $_POST['address'];
$credit = $_POST['credit'];

$phone = $_POST['phone'];
$cnic = $_POST['cnic'];
$ntn = $_POST['ntn'];
$personname = $_POST['personname'];
$city = $_POST['city'];
$chalanvoucher = $_POST['chalanvoucher'];
$builty = $_POST['builty'];

    if (!empty($s_name)){
        $sql = "INSERT INTO `supplier` (s_name, address, credit, phone, cnic, ntn, personname, city, chalanvoucher, builty)
         VALUES ('$s_name', '$address', '$credit', '$phone', '$cnic', '$ntn', '$personname', '$city', '$chalanvoucher', '$builty')";

        if ($con->query($sql) === TRUE) {
            echo "Supplier $s_name added successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    } else {
        echo "Please Enter a Supplier Name";
    }
?>