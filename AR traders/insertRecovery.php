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
    $receiver = mysqli_real_escape_string($con, $_POST['receiver']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $today = date('y-m-d');

    // Fetch client's debit and credit
    $sql = "SELECT debit, credit FROM clients WHERE c_name LIKE '%$searchClient%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clientdebit = $row['debit'];
        $clientcredit = $row['credit'];
        // $newclientdebit = 0; // Initially set to 0
        
        if ($clientdebit > 0) {
            $newclientdebit = abs($clientdebit - $amount);
            $query = "UPDATE clients SET debit = '$newclientdebit' WHERE c_name = '$searchClient'";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Data updated successfully";
            } else {
                echo "Error inserting data: " . mysqli_error($con);
            }

            $sql1 = "SELECT * FROM cashregister WHERE date='$today'";
            $result1 = $con->query($sql1);
            
            if ($result1->num_rows > 0) {
                $row = $result1->fetch_assoc();
                $recovery = $row['recovery'];
                
                $newrecovery = $recovery + $amount;
                $queryreco = "UPDATE cashregister SET recovery = '$newrecovery' WHERE date = '$today'";
                $resultreco = mysqli_query($con, $queryreco);

                if ($resultreco) {
                    echo "Data updated successfully";
                } else {
                    echo "Error inserting data: " . mysqli_error($con);
                }
            }
            else{
                $newrecovery = 0 + $amount;
                $queryreco1 = "INSERT INTO `cashregiser` (recovery, date)
                 VALUES ('$newrecovery', '$today')";

        if ($con->query($queryreco1) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $queryreco1 . "<br>" . $con->error;
        }
            }

            $sql = "SELECT * FROM acbalance WHERE date='$today'";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $acbalance = $row['ACbalance'];
                
                $newacbalance = $acbalance + $amount;
                $query = "UPDATE acbalance SET ACbalance = '$newacbalance' WHERE date = '$today'";
                $result = mysqli_query($con, $query);

                if ($result) {
                    echo "Data updated successfully";
                } else {
                    echo "Error inserting data: " . mysqli_error($con);
                }
            }
            else{
                $newacbalance = 0 + $amount;
                $query = "INSERT INTO `acbalance` (ACbalance,date)
                 VALUES ('$newacbalance', '$today')";

        if ($con->query($query) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
        }
            }
        }else{
            $newclientdebit = 0;
            $query = "UPDATE clients SET debit = '$newclientdebit' WHERE c_name = '$searchClient'";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Data updated successfully";
            } else {
                echo "Error inserting data: " . mysqli_error($con);
            }
        }
        $newclientdebit = abs($clientdebit - $amount);
        // Insert data into radio table
        $sql1 = "INSERT INTO `recovery` (c_name, credit, amount, debit, paymentType, address, phone, cnic, ntn, shopName, receiver, city)
                 VALUES ('$searchClient', '$clientcredit', '$amount', '$newclientdebit', '$paymentType', '$address', '$phone', '$cnic', '$ntn', '$shopName', '$receiver', '$city')";

        if ($con->query($sql1) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }
    } else {
        echo "Error fetching credit or debit.";
    }
} else {
    echo "Enter Client Name or Payment Type First";
}
?>
