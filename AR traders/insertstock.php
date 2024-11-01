<?php
include 'connection.php';
// Query create karein
    $invoice = $_POST['invoice'];
    $searchSupplier = $_POST['searchSupplier'];
    $supplierDebit = $_POST['supplierDebit'];
    $supplierBill = $_POST['supplierBill'];
    $newDebit = $_POST['newDebit'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $ntn = $_POST['ntn'];
    $shopName = $_POST['shopName'];
    $personName = isset($_POST["personName"]) ? $_POST["personName"] : '';
    $city = $_POST['city'];

    $Iname = $_POST['name'];
    $Quantity = $_POST['Quantity'];
    $Rate = $_POST['Rate'];
    $salesRate = $_POST['salesRate'];
    $Discount = $_POST['Discount'];
    $perdiscount = $_POST['perdiscount'];
    $value = $_POST['value'];
    $Total = $_POST['Total'];
    $Billing = $_POST['Billing'];
    $g_name = $_POST['g_name'];

    $Iname1 = $_POST['name1'];
    $Quantity1 = $_POST['Quantity1'];
    $Rate1 = $_POST['Rate1'];
    $salesRate1 = $_POST['salesRate1'];
    $Discount1 = $_POST['Discount1'];
    $perdiscount1 = $_POST['perdiscount1'];
    $value1 = $_POST['value1'];
    $Total1 = $_POST['Total1'];
    $Billing1 = $_POST['Billing1'];

    $Iname2 = $_POST['name2'];
    $Quantity2 = $_POST['Quantity2'];
    $Rate2 = $_POST['Rate2'];
    $salesRate2 = $_POST['salesRate2'];
    $Discount2 = $_POST['Discount2'];
    $perdiscount2 = $_POST['perdiscount2'];
    $value2 = $_POST['value2'];
    $Total2 = $_POST['Total2'];
    $Billing2 = $_POST['Billing2'];

    $Iname3 = $_POST['name3'];
    $Quantity3 = $_POST['Quantity3'];
    $Rate3 = $_POST['Rate3'];
    $salesRate3 = $_POST['salesRate3'];
    $Discount3 = $_POST['Discount3'];
    $perdiscount3 = $_POST['perdiscount3'];
    $value3 = $_POST['value3'];
    $Total3 = $_POST['Total3'];
    $Billing3 = $_POST['Billing3'];

    $Iname4 = $_POST['name4'];
    $Quantity4 = $_POST['Quantity4'];
    $Rate4 = $_POST['Rate4'];
    $Discount4 = $_POST['Discount4'];
    $perdiscount4 = $_POST['perdiscount4'];
    $value4 = $_POST['value4'];
    $Total4 = $_POST['Total4'];
    $Billing4 = $_POST['Billing4'];

    $Iname5 = $_POST['name5'];
    $Quantity5 = $_POST['Quantity5'];
    $Rate5 = $_POST['Rate5'];
    $Discount5 = $_POST['Discount5'];
    $perdiscount5 = $_POST['perdiscount5'];
    $value5 = $_POST['value5'];
    $Total5 = $_POST['Total5'];
    $Billing5 = $_POST['Billing5'];

    $Iname6 = $_POST['name6'];
    $Quantity6 = $_POST['Quantity6'];
    $Rate6 = $_POST['Rate6'];
    $Discount6 = $_POST['Discount6'];
    $perdiscount6 = $_POST['perdiscount6'];
    $value6 = $_POST['value6'];
    $Total6 = $_POST['Total6'];
    $Billing6 = $_POST['Billing6'];

    $Iname7 = $_POST['name7'];
    $Quantity7 = $_POST['Quantity7'];
    $Rate7 = $_POST['Rate7'];
    $Discount7 = $_POST['Discount7'];
    $perdiscount7 = $_POST['perdiscount7'];
    $value7 = $_POST['value7'];
    $Total7 = $_POST['Total7'];
    $Billing7 = $_POST['Billing7'];

    $Iname8 = $_POST['name8'];
    $Quantity8 = $_POST['Quantity8'];
    $Rate8 = $_POST['Rate8'];
    $Discount8 = $_POST['Discount8'];
    $perdiscount8 = $_POST['perdiscount8'];
    $value8 = $_POST['value8'];
    $Total8 = $_POST['Total8'];
    $Billing8 = $_POST['Billing8'];

    $Iname9 = $_POST['name9'];
    $Quantity9 = $_POST['Quantity9'];
    $Rate9 = $_POST['Rate9'];
    $Discount9 = $_POST['Discount9'];
    $perdiscount9 = $_POST['perdiscount9'];
    $value9 = $_POST['value9'];
    $Total9 = $_POST['Total9'];
    $Billing9 = $_POST['Billing9'];
    $g_name9 = $_POST['g_name9'];
    // $vehicalNumbar = $_POST['vehicalNumber'];
    $vehicalNumbar = isset($_POST['vehicalNumber']) ? $_POST['vehicalNumber'] : '';
    $today = date('y-m-d');
    
    
    if (!empty($searchSupplier) ) {
        // Query to fetch the most recent record for the supplier based on name
        $creditdebitquery = "SELECT * FROM supplier WHERE s_name = '$searchSupplier' ORDER BY id DESC LIMIT 1";
        // Fetch the existing debit/credit for the supplier

        $resultcreditdebitquery = mysqli_query($con, $creditdebitquery);

        if ($resultcreditdebitquery && mysqli_num_rows($resultcreditdebitquery) > 0) {
            $row = mysqli_fetch_assoc($resultcreditdebitquery);
            $existingCredit = $row['credit'];
        } else {
            $existingCredit = 0; // Default to 0 if no previous credit is found
        }

        // Calculate remaining debit and credit
        $remainingDebit = $supplierDebit - $supplierBill;
        $supplierCredit = 0;

        if ($remainingDebit < 0) {
            $supplierDebit = 0;
            $supplierCredit = abs($remainingDebit) + $existingCredit; // Add existing credit if any
        } else {
            $newDebit = $remainingDebit;
            $supplierCredit = $existingCredit; // Keep the existing credit if no new credit is calculated
        }

        // Update the supplier record with the new credit and debit values
        $queryUpdate = "UPDATE `supplier` SET `debit`='$newDebit', `credit` = '$supplierCredit' WHERE `s_name` = '$searchSupplier' ORDER BY id DESC LIMIT 1";
        $resultUpdate = mysqli_query($con, $queryUpdate);

        if ($resultUpdate) {
            echo "Supplier's Credit/Debit updated successfully";
        } else {
            echo "Error inserting data";
        }

        //  $debit = $supplierBill;
        //  $query1 = "INSERT INTO `supplierhistory` ( s_name,credit,amount,newCredit,debit,address,phone,cnic,ntn,shopName,personName,city) 
        //     VALUES ('$searchSupplier','$supplierCredit','$supplierBill','$newCredit','$supplierDebit','$address','$phone','$cnic','$ntn','$shopName','$personName','$city')"; 
        // $result1 = mysqli_query($con, $query1);
        // if ($result1) {
        //     echo "Data inserted in Supplier History successfully";
        // } 
        // else {
        //     echo "Error inserting Supplier History";
        // }

        $query3 = "SELECT * FROM acbalance WHERE date = '$today'";
        $result3 = mysqli_query($con, $query3);

        if(mysqli_num_rows($result3) > 0) {
            while ($row = mysqli_fetch_assoc($result3)) {
                $ACbalance = $row["ACbalance"];
            }
            $newACbalance = $ACbalance - $supplierBill;
            // Update the existing record
            $query4 = "UPDATE acbalance SET ACbalance = $newACbalance WHERE date = '$today'";
            $result4 = mysqli_query($con, $query4);

            if($result4) {
                echo "Account Balance Updated Successfully";
            } else {
                echo "Error in Updating Data";
            }
        } else {
            // Insert a new record
            $query5 = "INSERT INTO acbalance (ACbalance, date) VALUES ($newACbalance, '$today')";
            $result5 = mysqli_query($con, $query5);

            if($result5) {
                echo "Data Inserted in Account Successfully";
            } else {
                echo "Error in Inserting Data";
            }
        }
     }else{
         echo"Enter Supplier Name First"; 
     }

    if (!empty($Iname) && !empty($Quantity) && !empty($Rate) && !empty($searchSupplier)) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname', '$Quantity', '$Rate', '$value', '$Discount', '$perdiscount', '$Total', '$Billing', '$Iname', '$searchSupplier', '$vehicalNumbar', '$invoice')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock inserted successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity WHERE Iname = '$Iname'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully3";
            } else {
                echo "Error updating Stock";
            }
        }
        $querysql = "INSERT INTO stockhistory (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname', '$Quantity', '$Rate', '$value', '$Discount', '$perdiscount', '$Total', '$Billing', '$Iname', '$searchSupplier', '$vehicalNumbar', '$invoice')";
            $resultsql = mysqli_query($con, $querysql);
            
            if ($resultsql) {
                echo "Stock History Created Successfully";
            } else {
                echo "Error inserting Supplier History";
            }
    } else {
        echo "Enter Item Or Supplier Name First";
    }


    if (!empty($Iname1) && !empty($Quantity1) && !empty($Rate1) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname1'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname1', '$Quantity1', '$Rate1', '$value1', '$Discount1', '$perdiscount1', '$Total1', '$Billing1', '$Iname1', '$searchSupplier', '$vehicalNumbar', '$invoice')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity1 WHERE Iname = '$Iname1'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname2) && !empty($Quantity2) && !empty($Rate2) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname2'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname2', '$Quantity2', '$Rate2', '$value2', '$Discount2', '$perdiscount2', '$Total2', '$Billing2', '$Iname2', '$searchSupplier2', '$vehicalNumbar2', '$invoice2')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity2 WHERE Iname = '$Iname2'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } else {
        // echo "Enter Item Or Supplier Name First";
    }

    if (!empty($Iname3) && !empty($Quantity3) && !empty($Rate3) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname3'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname3', '$Quantity3', '$Rate3', '$value3', '$Discount3', '$perdiscount3', '$Total3', '$Billing3', '$Iname3', '$searchSupplier3', '$vehicalNumbar3', '$invoice3')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity3 WHERE Iname = '$Iname3'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname4) && !empty($Quantity4) && !empty($Rate4) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname4'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname4', '$Quantity4', '$Rate4', '$value4', '$Discount4', '$perdiscount4', '$Total4', '$Billing4', '$Iname4', '$searchSupplier4', '$vehicalNumbar4', '$invoice4')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity4 WHERE Iname = '$Iname4'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname5) && !empty($Quantity5) && !empty($Rate5) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname5'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname5', '$Quantity5', '$Rate5', '$value5', '$Discount5', '$perdiscount5', '$Total5', '$Billing5', '$Iname5', '$searchSupplier5', '$vehicalNumbar5', '$invoice5')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity5 WHERE Iname = '$Iname5'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname6) && !empty($Quantity6) && !empty($Rate6) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname6'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname6', '$Quantity6', '$Rate6', '$value6', '$Discount6', '$perdiscount6', '$Total6', '$Billing6', '$Iname6', '$searchSupplier6', '$vehicalNumbar6', '$invoice6')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity6 WHERE Iname = '$Iname6'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname7) && !empty($Quantity7) && !empty($Rate7) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname7'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname7', '$Quantity7', '$Rate7', '$value7', '$Discount7', '$perdiscount7', '$Total7', '$Billing7', '$Iname7', '$searchSupplier7', '$vehicalNumbar7', '$invoice7')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity7 WHERE Iname = '$Iname7'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 

    if (!empty($Iname8) && !empty($Quantity8) && !empty($Rate8) ) {
        $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname8'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname8', '$Quantity8', '$Rate8', '$value8', '$Discount8', '$perdiscount8', '$Total8', '$Billing8', '$Iname8', '$searchSupplier8', '$vehicalNumbar8', '$invoice8')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity8 WHERE Iname = '$Iname8'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    } 
    
        if (!empty($Iname9) && !empty($Quantity9) && !empty($Rate9) ) {
            $query1 = "SELECT Iname FROM stock WHERE Iname = '$Iname9'";
        $result1 = mysqli_query($con, $query1);
        
        if ($result1->num_rows == 0) {
            $query = "INSERT INTO stock (Iname, Quantity, Rate, value, Discount, perdiscount, Total, Billing, g_name, supplier, vehicalNumber, invoice) 
                      VALUES ('$Iname9', '$Quantity9', '$Rate9', '$value9', '$Discount9', '$perdiscount9', '$Total9', '$Billing9', '$Iname9', '$searchSupplier9', '$vehicalNumbar9', '$invoice9')";
            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "Stock Created Successfully";
            } else {
                echo "Error inserting Stock";
            }
        } else {
            $query2 = "UPDATE stock SET Quantity = quantity + $Quantity9 WHERE Iname = '$Iname9'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                echo "Stock Updated Successfully";
            } else {
                echo "Error updating Stock";
            }
        }
    }
    ?>