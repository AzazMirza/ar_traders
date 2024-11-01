<?php
include 'connection.php';

    $invoice = $_POST['invoice'];
    $searchClient = $_POST['searchClient'];
    $clientCredit = $_POST['clientCredit'];
    $clientBill = $_POST['clientBill'];
    $newCredit = $_POST['newCredit'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $ntn = $_POST['ntn'];
    $shopName = $_POST['shopName'];
    $personName = isset($_POST['personName']) ? $_POST['personName'] : '';
    $city = $_POST['city'];

    $Iname = $_POST['name'];
    $sQuantity = $_POST['sQuantity'];
    // $Quantity = $_POST['Quantity'];
    $Rate = $_POST['Rate'];
    $Discount = $_POST['Discount'];
    $perdiscount = $_POST['perdiscount'];
    $value = $_POST['value'];
    $Total = $_POST['Total'];
    $Billing = $_POST['Billing'];
    $g_name = $_POST['g_name'];

    $Iname1 = $_POST['name1'];
    $sQuantity1 = $_POST['sQuantity1'];
    $Rate1 = $_POST['Rate1'];
    $Discount1 = $_POST['Discount1'];
    $perdiscount1 = $_POST['perdiscount1'];
    $value1 = $_POST['value1'];
    $Total1 = $_POST['Total1'];
    $Billing1 = $_POST['Billing1'];
    $g_name1 = $_POST['g_name1'];

    $Iname2 = $_POST['name2'];
    $sQuantity2 = $_POST['sQuantity2'];
    $Rate2 = $_POST['Rate2'];
    $Discount2 = $_POST['Discount2'];
    $perdiscount2 = $_POST['perdiscount2'];
    $value2 = $_POST['value2'];
    $Total2 = $_POST['Total2'];
    $Billing2 = $_POST['Billing2'];
    $g_name2 = $_POST['g_name2'];

    $Iname3 = $_POST['name3'];
    $sQuantity3 = $_POST['sQuantity3'];
    $Rate3 = $_POST['Rate3'];
    $Discount3 = $_POST['Discount3'];
    $perdiscount3 = $_POST['perdiscount3'];
    $value3 = $_POST['value3'];
    $Total3 = $_POST['Total3'];
    $Billing3 = $_POST['Billing3'];
    $g_name3 = $_POST['g_name3'];

    $Iname4 = $_POST['name4'];
    $sQuantity4 = $_POST['sQuantity4'];
    $Rate4 = $_POST['Rate4'];
    $Discount4 = $_POST['Discount4'];
    $perdiscount4 = $_POST['perdiscount4'];
    $value4 = $_POST['value4'];
    $Total4 = $_POST['Total4'];
    $Billing4 = $_POST['Billing4'];
    $g_name4 = $_POST['g_name4'];

    $Iname5 = $_POST['name5'];
    $sQuantity5 = $_POST['sQuantity5'];
    $Rate5 = $_POST['Rate5'];
    $Discount5 = $_POST['Discount5'];
    $perdiscount5 = $_POST['perdiscount5'];
    $value5 = $_POST['value5'];
    $Total5 = $_POST['Total5'];
    $Billing5 = $_POST['Billing5'];
    $g_name5 = $_POST['g_name5'];

    $Iname6 = $_POST['name6'];
    $sQuantity6 = $_POST['sQuantity6'];
    $Rate6 = $_POST['Rate6'];
    $Discount6 = $_POST['Discount6'];
    $perdiscount6 = $_POST['perdiscount6'];
    $value6 = $_POST['value6'];
    $Total6 = $_POST['Total6'];
    $Billing6 = $_POST['Billing6'];
    $g_name6 = $_POST['g_name6'];

    $Iname7 = $_POST['name7'];
    $sQuantity7 = $_POST['sQuantity7'];
    $Rate7 = $_POST['Rate7'];
    $Discount7 = $_POST['Discount7'];
    $perdiscount7 = $_POST['perdiscount7'];
    $value7 = $_POST['value7'];
    $Total7 = $_POST['Total7'];
    $Billing7 = $_POST['Billing7'];
    $g_name7 = $_POST['g_name7'];

    $Iname8 = $_POST['name8'];
    $sQuantity8 = $_POST['sQuantity8'];
    $Rate8 = $_POST['Rate8'];
    $Discount8 = $_POST['Discount8'];
    $perdiscount8 = $_POST['perdiscount8'];
    $value8 = $_POST['value8'];
    $Total8 = $_POST['Total8'];
    $Billing8 = $_POST['Billing8'];
    $g_name8 = $_POST['g_name8'];

    $Iname9 = $_POST['name9'];
    $sQuantity9 = $_POST['sQuantity9'];
    $Rate9 = $_POST['Rate9'];
    $Discount9 = $_POST['Discount9'];
    $perdiscount9 = $_POST['perdiscount9'];
    $value9 = $_POST['value9'];
    $Total9 = $_POST['Total9'];
    $Billing9 = $_POST['Billing9'];
    $g_name9 = $_POST['g_name9'];

    $today = date('y-m-d');
    
    
    // $vehicalNumbar = $_POST['vehicalNumber'];
    $vehicalNumbar = isset($_POST['vehicalNumber']) ? $_POST['vehicalNumber'] : '';

    
    if (!empty($searchClient)) {
        $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $avaQuantity = $row['Quantity'];
    
        if ($avaQuantity >= $sQuantity) {
            $creditdebitquery = "SELECT * FROM clients WHERE c_name = '$searchClient' ORDER BY id DESC LIMIT 1";
            // Fetch the existing debit/credit for the client
            
            $resultcreditdebitquery = mysqli_query($con, $creditdebitquery);

            if ($resultcreditdebitquery && mysqli_num_rows($resultcreditdebitquery) > 0) {
                $row = mysqli_fetch_assoc($resultcreditdebitquery);
                $existingDebit = $row['debit'];
            } else {
                $existingDebit = 0; // Default to 0 if no previous debit is found
            }

            // Calculate remaining credit and debit
            $remainingCredit = $clientCredit - $clientBill;
            $clientDebit = 0;

            if ($remainingCredit < 0) {
                $clientCredit = 0;
                $clientDebit = abs($remainingCredit) + $existingDebit; // Add existing debit if any
            } else {
                $newCredit = $remainingCredit;
                $clientDebit = $existingDebit; // Keep the existing debit if no new debit is calculated
            }

            // Update the client record with the new credit and debit values
            $queryUpdate = "UPDATE `clients` SET `credit`='$newCredit', `debit` = '$clientDebit' WHERE `c_name` = '$searchClient' ORDER BY id DESC LIMIT 1";
            $resultUpdate = mysqli_query($con, $queryUpdate);

            if ($resultUpdate) {
                echo "Clients Credit/Debit updated successfully";
            } else {
                echo "Error inserting data";
            }

    
            $query1 = "INSERT INTO `clienthistory` (c_name, credit, amount, newCredit, debit, address, phone, cnic, ntn, shopName, personName, city) 
            VALUES ('$searchClient', '$clientCredit', '$clientBill', '$newCredit', '$clientDebit', '$address', '$phone', '$cnic', '$ntn', '$shopName', '$personName', '$city')";
            $result1 = mysqli_query($con, $query1);
    
            if ($result1) {
                echo " Client history data inserted successfully";
            } else {
                echo "Error inserting data";
            }
            
            $selectquery = "SELECT * FROM cashregister WHERE date = '$today'";
            $selectresult = mysqli_query($con, $selectquery);
    
            if (mysqli_num_rows($selectresult) > 0) {
                while ($row = mysqli_fetch_assoc($selectresult)) {
                    $openingBalance = $row["openingBalance"];
                }
    
                $newopeningBalance = $openingBalance + $clientBill;
    
                // Update the existing record
                $updatequery = "UPDATE cashregister SET openingBalance = $newopeningBalance WHERE date = '$today'";
                $updateresult = mysqli_query($con, $updatequery);
    
                if ($updateresult) {
                    echo "CashRegister Updated Successfully";
                } else {
                    echo "Error in Updating Data";
                }
            } else {
                $newopeningBalance = $clientBill;
                // Insert a new record
                $insertquery = "INSERT INTO cashregister (openingBalance, date) VALUES ($newopeningBalance, '$today')";
                $insertresult = mysqli_query($con, $insertquery);
    
                if ($insertresult) {
                    echo " CashRegister Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
            }

            $query3 = "SELECT * FROM acbalance WHERE date = '$today'";
            $result3 = mysqli_query($con, $query3);
    
            if (mysqli_num_rows($result3) > 0) {
                while ($row = mysqli_fetch_assoc($result3)) {
                    $acbalance = $row["ACbalance"];
                }
    
                $newACbalance = $acbalance + $clientBill;
    
                // Update the existing record
                $query4 = "UPDATE acbalance SET ACbalance = $newACbalance WHERE date = '$today'";
                $result4 = mysqli_query($con, $query4);
    
                if ($result4) {
                    echo "Account Balance Updated Successfully";
                } else {
                    echo "Error in Updating Data";
                }
            } else {
                $newACbalance = $clientBill;
                // Insert a new record
                $query5 = "INSERT INTO acbalance (ACbalance, date) VALUES ($newACbalance, '$today')";
                $result5 = mysqli_query($con, $query5);
    
                if ($result5) {
                    echo "AccountBalance Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
            }
    
            $dispatchsql = "SELECT * from dispatchdiscount where date = '$today'";
            $resultdis = mysqli_query($con, $dispatchsql);
    
            if (mysqli_num_rows($resultdis) > 0) {
                while ($row = mysqli_fetch_assoc($resultdis)) {
                    $dispatch = $row["dispatch"];
                    $acdiscount = $row["discount"];
                }
    
                $newdispatch = $dispatch + $clientBill;
                $totaldiscount = $acdiscount + $Discount + $Discount1 + $Discount2 + $Discount3 + $Discount4 + $Discount5 + $Discount6 + $Discount7 + $Discount8 + $Discount9;
                $dispatchsql1 = "UPDATE dispatchdiscount set dispatch = $newdispatch where date ='$today'";
                $resultdis1 = mysqli_query($con, $dispatchsql1);
                $acdisc = "UPDATE dispatchdiscount set discount = $totaldiscount where date ='$today'";
                    $resultdisc = mysqli_query($con, $acdisc);
                $insert="INSERT into cashregister (dispatch , discount)";
                if ($resultdis1 && $resultdisc) {
                    echo "Data Updated Successfully";
                } else {
                    echo "Error in Updating Data";
                }
            } else {
                $dispatch = $clientBill;
                $totaldiscount= $Discount + $Discount1 + $Discount2 + $Discount3 + $Discount4 + $Discount5 + $Discount6 + $Discount7 + $Discount8 + $Discount9;
                
                $dispatchsql2 = "INSERT INTO dispatchdiscount (dispatch, date) VALUES ($dispatch, '$today')";
                $resultdis2 = mysqli_query($con, $dispatchsql2);

                $acdisc2 = "INSERT INTO dispatchdiscount (discount, date) VALUES ($totaldiscount, '$today')";
                $resultdisc2 = mysqli_query($con, $acdisc2);
                if ($resultdis2 && $resultdisc2) {
                    echo "Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
            }

            $dispatchsql1 = "SELECT * from cashregister where date = '$today'";
            $resultdis1 = mysqli_query($con, $dispatchsql1);
    
            if (mysqli_num_rows($resultdis1) > 0) {
                while ($row = mysqli_fetch_assoc($resultdis1)) {
                    $dispatch1 = $row["dispatch"];
                    $acdiscount1 = $row["discount"];
                }
    
                $newdispatch1 = $dispatch1 + $clientBill;
                $totaldiscount1 = $acdiscount1 + $Discount + $Discount1 + $Discount2 + $Discount3 + $Discount4 + $Discount5 + $Discount6 + $Discount7 + $Discount8 + $Discount9;
                $dispatchsql2 = "UPDATE cashregister set dispatch = $newdispatch1 where date ='$today'";
                $resultdis2 = mysqli_query($con, $dispatchsql2);
                $acdisc1 = "UPDATE cashregister set discount = $totaldiscount1 where date ='$today'";
                    $resultdisc1 = mysqli_query($con, $acdisc1);
                
                if ($resultdis2 && $resultdisc1) {
                    echo "Data Updated Successfully";
                } else {
                    echo "Error in Updating Data";
                }
            } else {
                $dispatch = $clientBill;
                $totaldiscount2= $Discount + $Discount1 + $Discount2 + $Discount3 + $Discount4 + $Discount5 + $Discount6 + $Discount7 + $Discount8 + $Discount9;
                
                $dispatchsql2 = "INSERT INTO cashregister (dispatch, date) VALUES ($dispatch, '$today')";
                $resultdis2 = mysqli_query($con, $dispatchsql2);

                $acdisc2 = "INSERT INTO cashregister (discount, date) VALUES ($discount, '$today')";
                $resultdisc2 = mysqli_query($con, $acdisc2);
                if ($resultdis2 && $resultdisc2) {
                    echo "Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
            }


        } else {
            echo "Not enough items in the inventory";
        }
    } else {
        echo "Enter Client Name First";
    }
    
    if (!empty($Iname) && !empty($sQuantity) && !empty($Rate) && !empty($searchClient) ) {
        $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $avaQuantity = $row['Quantity'];
    if($avaQuantity >= $sQuantity){
        $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
                   VALUES ('$Iname', '$sQuantity', '$Rate', '$value', '$Discount', '$perdiscount', '$Total', '$Billing', '$g_name', '$searchClient', '$vehicalNumbar', '$invoice')";
        $result1 = mysqli_query($con, $query1);
        if ($result1) {
            $newQuantity = $avaQuantity - $sQuantity;
                $stock = "UPDATE stock SET Quantity ='$newQuantity' WHERE Iname = '$Iname'";
                $stock_result = mysqli_query($con, $stock);
    
                 if ($stock_result) {
            echo "Data inserted successfully";
        } else {
            echo "Error updating stock";
        }
        if($newQuantity < 50){
            echo" $Iname is less then 50. Remaining '$Iname' is '$newQuantity'";
        }else{
            echo "Remaining '$Iname' is '$newQuantity' ";
        }
    } else {
        echo "Error Inserting Data";
    }
} else {
    echo "Not enough items in the inventory";
    }
} else {
    echo "Error fetching Quantity from stock";
}


if (!empty($Iname1) && !empty($sQuantity1) && !empty($Rate1) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname1'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity1 = $row['Quantity'];
if($avaQuantity1 >= $sQuantity1){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname1', '$sQuantity1', '$Rate1', '$value1', '$Discount1', '$perdiscount1', '$Total1', '$Billing1', '$g_name1', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity1 = $avaQuantity1 - $sQuantity1;
            $stock = "UPDATE stock SET Quantity ='$newQuantity1' WHERE Iname = '$Iname1'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity1 < 50){
        echo" $Iname1 is less then 50. Remaining $Iname1 is $newQuantity1";
    }else{
        echo "Remaining $Iname1 is $newQuantity1";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname2) && !empty($sQuantity2) && !empty($Rate2) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname2'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity2 = $row['Quantity'];
if($avaQuantity2 >= $sQuantity2){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname2', '$sQuantity2', '$Rate2', '$value2', '$Discount2', '$perdiscount2', '$Total2', '$Billing2', '$g_name2', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity2 = $avaQuantity2 - $sQuantity2;
            $stock = "UPDATE stock SET Quantity ='$newQuantity2' WHERE Iname = '$Iname2'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity2 < 50){
        echo" $Iname2 is less then 50. Remaining $Iname2 is $newQuantity2";
    }else{
        echo "Remaining $Iname2 is $newQuantity2";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname3) && !empty($sQuantity3) && !empty($Rate3) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname3'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity3 = $row['Quantity'];
if($avaQuantity3 >= $sQuantity3){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname3', '$sQuantity3', '$Rate3', '$value3', '$Discount3', '$perdiscount3', '$Total3', '$Billing3', '$g_name3', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity3 = $avaQuantity3 - $sQuantity3;
            $stock = "UPDATE stock SET Quantity ='$newQuantity3' WHERE Iname = '$Iname3'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity3 < 50){
        echo" $Iname3 is less then 50. Remaining $Iname3 is $newQuantity3";
    }else{
        echo "Remaining $Iname3 is $newQuantity3";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname4) && !empty($sQuantity4) && !empty($Rate4) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname4'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity4 = $row['Quantity'];
if($avaQuantity4 >= $sQuantity4){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname4', '$sQuantity4', '$Rate4', '$value4', '$Discount4', '$perdiscount4', '$Total4', '$Billing4', '$g_name4', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity4 = $avaQuantity4 - $sQuantity4;
            $stock = "UPDATE stock SET Quantity ='$newQuantity4' WHERE Iname = '$Iname4'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity4 < 50){
        echo" $Iname4 is less then 50. Remaining $Iname4 is $newQuantity4";
    }else{
        echo "Remaining $Iname4 is $newQuantity4";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname5) && !empty($sQuantity5) && !empty($Rate5) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname5'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity5 = $row['Quantity'];
if($avaQuantity5 >= $sQuantity5){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname5', '$sQuantity5', '$Rate5', '$value5', '$Discount5', '$perdiscount5', '$Total5', '$Billing5', '$g_name5', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity5 = $avaQuantity5 - $sQuantity5;
            $stock = "UPDATE stock SET Quantity ='$newQuantity5' WHERE Iname = '$Iname5'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity5 < 50){
        echo" $Iname5 is less then 50. Remaining $Iname5 is $newQuantity5";
    }else{
        echo "Remaining $Iname5 is $newQuantity5";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname6) && !empty($sQuantity6) && !empty($Rate6) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname6'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity6 = $row['Quantity'];
if($avaQuantity6 >= $sQuantity6){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname6', '$sQuantity6', '$Rate6', '$value6', '$Discount6', '$perdiscount6', '$Total6', '$Billing6', '$g_name6', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity6 = $avaQuantity6 - $sQuantity6;
            $stock = "UPDATE stock SET Quantity ='$newQuantity6' WHERE Iname = '$Iname6'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity6 < 50){
        echo" $Iname6 is less then 50. Remaining $Iname6 is $newQuantity6";
    }else{
        echo "Remaining $Iname6 is $newQuantity6";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname) && !empty($sQuantity7) && !empty($Rate7) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname7'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity7 = $row['Quantity'];
if($avaQuantity7 >= $sQuantity7){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname7', '$sQuantity7', '$Rate7', '$value7', '$Discount7', '$perdiscount7', '$Total7', '$Billing7', '$g_name', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity7 = $avaQuantity7 - $sQuantity7;
            $stock = "UPDATE stock SET Quantity ='$newQuantity7' WHERE Iname = '$Iname7'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity7 < 50){
        echo" $Iname7 is less then 50. Remaining $Iname7 is $newQuantity7";
    }else{
        echo "Remaining $Iname7 is $newQuantity7";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname8) && !empty($sQuantity8) && !empty($Rate8) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname8'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity8 = $row['Quantity'];
if($avaQuantity8 >= $sQuantity8){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname8', '$sQuantity8', '$Rate8', '$value8', '$Discount8', '$perdiscount8', '$Total8', '$Billing8', '$g_name8', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity8 = $avaQuantity8 - $sQuantity8;
            $stock = "UPDATE stock SET Quantity ='$newQuantity8' WHERE Iname = '$Iname8'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity8 < 50){
        echo" $Iname8 is less then 50. Remaining $Iname8 is $newQuantity8";
    }else{
        echo "Remaining $Iname8 is $newQuantity8";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}

if (!empty($Iname9) && !empty($sQuantity9) && !empty($Rate9) && !empty($searchClient) ) {
    $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname9'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$avaQuantity9 = $row['Quantity'];
if($avaQuantity9 >= $sQuantity9){
    $query1 = "INSERT INTO stocksales (Iname, sQuantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, Client, vehicalNumber, invoice) 
               VALUES ('$Iname9', '$sQuantity9', '$Rate9', '$value9', '$Discount9', '$perdiscount9', '$Total9', '$Billing9', '$g_name9', '$searchClient', '$vehicalNumbar', '$invoice')";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
        $newQuantity9 = $avaQuantity9 - $sQuantity9;
            $stock = "UPDATE stock SET Quantity ='$newQuantity9' WHERE Iname = '$Iname9'";
            $stock_result = mysqli_query($con, $stock);

             if ($stock_result) {
        echo "Data inserted successfully";
    } else {
        echo "Error updating stock";
    }
    if($newQuantity9 < 50){
        echo" $Iname9 is less then 50. Remaining $Iname9 is $newQuantity9";
    }else{
        echo "Remaining $Iname9 is $newQuantity9";
    }
} else {
    echo "Error Inserting Data";
}
} else {
echo "Not enough items in the inventory";
}
} else {
// echo "Error fetching Quantity from stock";
}
    ?>
