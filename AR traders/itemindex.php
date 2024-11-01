<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    // $id=($_POST['id']);
    $Iname=($_POST['Iname']);
    $ItemDesc=($_POST['ItemDesc']);
    $PurchasePrice=($_POST['PurchasePrice']);
    $salePrice=($_POST['salePrice']);
    $wholeSale=($_POST['wholeSale']);
    $retail=($_POST['retail']);
    $sql="INSERT INTO `Items`( `Iname`, `ItemDesc`, `PurchasePrice`, `salePrice`, `wholeSale`, `retail` )
     VALUES ('$Iname', '$ItemDesc','$PurchasePrice', '$salePrice', '$wholeSale', '$retail' )";
    $result=($con->query($sql));   
    if($result)
    {
        echo"inserted";
    }
    else{
        echo ("connection error");
    }
    }