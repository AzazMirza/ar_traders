<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Stock Selling History</title>
    <link rel="stylesheet" href="group.css" >
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM stocksales WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<h1>
    Update Stock Selling History 
</h1>
<form action="#" method="post">
    <div>
        <label >Item Name</label>
        <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off">
        <label >Quantity</label>
        <input type="text" name="sQuantity" value="<?php echo $row['sQuantity']; ?>" autocomplete="off">
        <label >Rate</label>
        <input type="text" name="Rate" value="<?php echo $row['Rate']; ?>" autocomplete="off">
        <label >Without Discount</label>
        <input type="text" name="value" value="<?php echo $row['value']; ?>" autocomplete="off">
        <label >Discount/Scheme</label>
        <input type="text" name="Discount" value="<?php echo $row['Discount']; ?>" autocomplete="off">
        <label >Discount %</label>
        <input type="text" name="perdiscount" value="<?php echo $row['perdiscount']; ?>" autocomplete="off">
        <label >Total Discount</label>
        <input type="text" name="Total" value="<?php echo $row['Total']; ?>" autocomplete="off">
    </div>
    <div>
        <label >Billing</label>
        <input type="text" name="Billing" value="<?php echo $row['Billing']; ?>" autocomplete="off">
        <label >Group Name</label>
        <input type="text" name="g_name" value="<?php echo $row['g_name']; ?>" autocomplete="off">
        <label >Client Name</label>
        <input type="text" name="Client" value="<?php echo $row['Client']; ?>" autocomplete="off">
        <label >Vehical Number</label>
        <input type="text" name="vehicalNumber" value="<?php echo $row['vehicalNumber']; ?>" autocomplete="off">
        <label >invoice</label>
        <input type="text" name="invoice" value="<?php echo $row['invoice']; ?>" autocomplete="off">
        <label >Date</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off">
    </div>

<div class="btndiv" >
    <button id="btn" type="submit" name="submit">Update</button>
    <button ><a href="readcurrentstock.php"> Read </a> </button>
    <button ><a href="menu.php"> Home </a> </button>
</form>
</div>
    <?php
    } else {
    echo "Record not found.";
}
?>

<?php
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{

    $Iname=($_POST['Iname']);
    $Quantity=($_POST['sQuantity']);
    $Rate=($_POST['Rate']);
    $value=($_POST['value']);
    $Discount=($_POST['Discount']);
    $perdiscount=($_POST['perdiscount']);
    $Total=($_POST['Total']);
    $Billing=($_POST['Billing']);
    $g_name=($_POST['g_name']);
    $Client=($_POST['Client']);
    $vehicalNumber=($_POST['vehicalNumber']);
    $invoice=($_POST['invoice']);
    $date=($_POST['date']);
    
    $sql="UPDATE `stocksales` SET `Iname`='$Iname',`sQuantity`='$Quantity',`Rate`='$Rate',`value`='$value',`Discount`='$Discount',`perdiscount`='$perdiscount',`Total`='$Total',`Billing`='$Billing',`g_name`='$g_name',`Client`='$Client',`vehicalNumber`='$vehicalNumber',`invoice`='$invoice',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
         header('location:readstockselling.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>
