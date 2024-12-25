<?php
include 'connection.php';

$Iname = mysqli_real_escape_string($con, $_POST['Iname']);
$ItemDesc = $_POST['ItemDesc'];
$Rate = $_POST['Rate'];
$salePrice = $_POST['salePrice'];
$wholeSale = $_POST['wholeSale'];
$retail = $_POST['retail'];
$g_name = $_POST['g_name'];

$checkQuery = "SELECT Iname FROM `items` WHERE Iname = '$Iname'";
$checkResult = $con->query($checkQuery);

if ($checkResult->num_rows > 0) {
    echo " Item Name already exists in the database";
} else {   
    if (!empty($Iname) ) {
        $query = "INSERT INTO `items` ( Iname, ItemDesc, Rate, salePrice, wholeSale, retail, g_name) 
    VALUES ( '$Iname', '$ItemDesc','$Rate','$salePrice','$wholeSale','$retail','$g_name')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data";
        }
    }
}
?>