<?php
include 'connection.php';

// Check if all required fields are set
if (!empty($_POST['searchClient']) && !empty($_POST['paymentType'])) {
    // Escape user inputs for security
    $searchClient = mysqli_real_escape_string($con, $_POST['searchClient']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $paymentType = mysqli_real_escape_string($con, $_POST['paymentType']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $cnic = mysqli_real_escape_string($con, $_POST['cnic']);
    $ntn = mysqli_real_escape_string($con, $_POST['ntn']);
    $shopName = mysqli_real_escape_string($con, $_POST['shopName']);
    $city = mysqli_real_escape_string($con, $_POST['city']);

    // Fetch client's debit and credit
    $sql = "SELECT debit, credit FROM clients WHERE c_name LIKE '%$searchClient%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clientdebit = $row['debit'];
        $clientcredit = $row['credit'];

        // Update client's credit and debit
        if ($clientdebit < $amount) {
            $remainder = $amount - $clientdebit;
            $clientcredit += $remainder;
            $clientdebit = 0;
        } else {
            $clientdebit -= $amount;
        }

        $query = "UPDATE clients SET credit = '$clientcredit', debit = '$clientdebit' WHERE c_name = '$searchClient'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($con);
        }
        if($paymentType == "bank"){
        // Insert data into radio table
        $sql1 = "INSERT INTO radio (c_name, credit, amount, debit, paymentType, address, phone, cnic, ntn, shopName, city) 
        VALUES ('$searchClient', '$clientcredit', '$amount', '$clientdebit', '$paymentType', '$address', '$phone', '$cnic', '$ntn', '$shopName', '$city')";
        if ($con->query($sql1) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }

        $sql2 = "INSERT INTO bank (c_name, credit, amount, debit, paymentType, address, phone, cnic, ntn, shopName, city) 
        VALUES ('$searchClient', '$clientcredit', '$amount', '$clientdebit', '$paymentType', '$address', '$phone', '$cnic', '$ntn', '$shopName', '$city')";
        if ($con->query($sql2) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql2 . "<br>" . $con->error;
        }
    }
        else{
            $sql1 = "INSERT INTO radio (c_name, credit, amount, debit, paymentType, address, phone, cnic, ntn, shopName, city) 
        VALUES ('$searchClient', '$clientcredit', '$amount', '$clientdebit', '$paymentType', '$address', '$phone', '$cnic', '$ntn', '$shopName', '$city')";
        if ($con->query($sql1) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }
        }
    } else {
        echo "Error fetching credit or debit.";
    }
} else {
    echo "Enter Client Name Or Payment Type First";
}
?>