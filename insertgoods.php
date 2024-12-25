<?php
include 'connection.php';

$searchClient = $_POST['searchClient'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$cnic = $_POST['cnic'];
$ntn = $_POST['ntn'];
// $shopName = $_POST['shopName'];
$city = $_POST['city'];
$Iname = $_POST['Iname'];
$Quantity = $_POST['Quantity'];
$Rate = $_POST['Rate'];
$g_name = $_POST['g_name'];

$today = date('y-m-d');

// $sql = "SELECT * FROM acbalance WHERE where date = '$today'";
//   $sqlresult = mysqli_query($con, $sql);
//   $row = mysqli_fetch_assoc($sqlresult);
//   $avabalance = $row['ACbalance'];

if (!empty($searchClient)) {
  // Update quantity in the stock table
  $query = "SELECT Quantity FROM stock WHERE Iname = '$Iname'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $avaQuantity = $row['Quantity'];

  $newquantity = $avaQuantity + $Quantity;
  $totalamount = $Quantity*$Rate;
  $update_stock = "UPDATE stock SET Quantity = '$newquantity' WHERE Iname = '$Iname'";
  $update_stock_result = mysqli_query($con, $update_stock);

  if ($update_stock_result) {
    echo "Stock updated successfully";
  } else {
    echo "Error updating stock";
  }

  $query = "INSERT INTO `goods` (c_name, Iname, rate, quantity,amount, g_name, address, phone, cnic, ntn, city) 
  VALUES ('$searchClient', '$Iname', '$Rate', '$Quantity','$totalamount', '$g_name', '$address', '$phone', '$cnic', '$ntn', '$city')";
  $query_result = mysqli_query($con, $query);


  if ($query_result ) {
    echo "Data inserted successfully";
  } else {
    echo "Error inserting data";
  }
  $query2= "SELECT * from `cashregister` where date ='$today'";
        $result2 = mysqli_query($con, $query2);
        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_assoc($result2)) {
                $goods = $row["goods"];
                $goodsamount = $goods + $totalamount;
                $update_goods = "UPDATE cashregister set goods = '$goodsamount' where date = $today";
                $update_goods_result = mysqli_query($con,$update_goods);
                if ($update_goods_result) {
                    echo "goods updated successfully";
                } else {
                    echo "Error updating stock";
                }
             }
            }else{
                $goods = 0;
                $newgoods= $goods + $totalamount;
                $query3 = "INSERT INTO cashregister (goods, date) VALUES ($newgoods, '$today')";
                $result3 = mysqli_query($con, $query3);
                
                if ($result3) {
                    echo "Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
               
            }    

        $query1= "SELECT * from acbalance where date ='$today'";
        $result1 = mysqli_query($con, $query1);
        if (mysqli_num_rows($result1) > 0) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $acbalance = $row["ACbalance"];
                $newbalance = $acbalance - $totalamount;
                $update_balance = "UPDATE acbalance set ACbalance = '$newbalance' where date = $today";
                $update_balance_result = mysqli_query($con,$update_balance);
                if ($update_balance_result) {
                    echo "Balance updated successfully";
                } else {
                    echo "Error updating stock";
                }
             }
            }else{
                $balance = 0;
                $query2 = "INSERT INTO acbalance (ACbalance, date) VALUES ($balance, '$today')";
                $result2 = mysqli_query($con, $query2);
                
                if ($result2) {
                    echo "Data Inserted Successfully";
                } else {
                    echo "Error in Inserting Data";
                }
               
            }    
        } else {
            echo "Enter client name or item name first...";
        }
?>