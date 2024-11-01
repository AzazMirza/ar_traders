
<?php
include 'connection.php';

$searchSupplier = $_POST['searchSupplier'];
$supplierCredit = $_POST['supplierCredit'];
$amount = $_POST['amount'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$cnic = $_POST['cnic'];
$ntn = $_POST['ntn'];
$shopName = $_POST['shopName'];
// $personName = $_POST['personName'];
$city = $_POST['city'];
$paymentType = isset($_POST['paymentType']) ? $_POST['paymentType'] : '';
$newCredit = isset($_POST['credit']) ? $_POST['credit'] : '';
$newDebit = isset($_POST['debit']) ? $_POST['debit'] : '';

if (!empty($_POST['searchSupplier']) && !empty($_POST['paymentType'])) {

    // Escape user inputs for security
    $searchSupplier = mysqli_real_escape_string($con, $_POST['searchSupplier']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $paymentType = mysqli_real_escape_string($con, $_POST['paymentType']);

    // Insert data into radio table
    
    // Select debit and credit from suppliers table
    $sql = "SELECT debit, credit FROM supplier WHERE s_name LIKE '%$searchSupplier%'";
    $result = $con->query($sql);
    
    // Check if the supplier is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $supplierdebit = $row['debit'];
        $suppliercredit = $row['credit'];
        
        if ($supplierdebit < $amount) {
            // Calculate remainder
            $remainder = $amount - $supplierdebit;
            // Update credit
            $suppliercredit += $remainder;
            // Update debit
            $supplierdebit = 0;
        } else {
            // Subtract amount from debit
            $supplierdebit -= $amount;
        } 

        // Update suppliers table with new credit and debit
        $query = "UPDATE supplier SET credit = '$suppliercredit', debit = '$supplierdebit' WHERE s_name = '$searchSupplier'";
        $result = mysqli_query($con, $query);
        
        // Check if the update is successful
        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($con);
        }
        $sql1 = "INSERT INTO supplierradio (s_name,credit, amount,debit, paymentType,address,phone,cnic,ntn,shopName,city) 
        VALUES ('$searchSupplier','$suppliercredit', '$amount', '$supplierdebit','$paymentType','$address','$phone','$cnic','$ntn','$shopName','$city')";
        if ($con->query($sql1) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }
    } else {
        echo "Supplier not found";
    }
} else {
    echo "Enter Supplier Name Or Payment Type First ";
}
?>
