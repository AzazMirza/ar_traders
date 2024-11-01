<?php
include 'connection.php';

$expense = $_POST['name'];
$personName = $_POST['personName'];
$amount = $_POST['amount'];
    if (!empty($expense)){
        $sql = "INSERT INTO `expenses` (expense,amount,personName) VALUES ('$expense','$amount','$personName')";

        if ($con->query($sql) === TRUE) {
            echo "Expense $expense added successfully.";
        } else {
            echo "Error Inserting Data." . $con->error;
        }
    } else {
        echo "Please Enter a Expense Name.";
    }
?>