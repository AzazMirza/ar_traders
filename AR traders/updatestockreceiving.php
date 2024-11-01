<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Stock receiving</title>
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM stock WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<form action="#" method="post">
        <label >Item Name</label>
        <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off"><br>
        <label >Quantity</label>
        <input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>" autocomplete="off"><br>
        <label >Rate</label>
        <input type="text" name="Rate" value="<?php echo $row['Rate']; ?>" autocomplete="off"><br>
        <label >Without Discount</label>
        <input type="text" name="value" value="<?php echo $row['value']; ?>" autocomplete="off"><br>
        <label >Discount/Scheme</label>
        <input type="text" name="Discount" value="<?php echo $row['Discount']; ?>" autocomplete="off"><br>
        <label >Discount %</label>
        <input type="text" name="perdiscount" value="<?php echo $row['perdiscount']; ?>" autocomplete="off"><br>
        <label >Total Discount</label>
        <input type="text" name="Total" value="<?php echo $row['Total']; ?>" autocomplete="off"><br>
        <label >Billing</label>
        <input type="text" name="Billing" value="<?php echo $row['Billing']; ?>" autocomplete="off"><br>
        <label >Group Name</label>
        <input type="text" name="g_name" value="<?php echo $row['g_name']; ?>" autocomplete="off"><br>
        <label >Client Name</label>
        <input type="text" name="supplier" value="<?php echo $row['supplier']; ?>" autocomplete="off"><br>
        <label >Vehical Number</label>
        <input type="text" name="vehicalNumber" value="<?php echo $row['vehicalNumber']; ?>" autocomplete="off"><br>
        <label >invoice</label>
        <input type="text" name="invoice" value="<?php echo $row['invoice']; ?>" autocomplete="off"><br>
        <label >Date</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off"><br>
        <button type="submit" name="submit">Update</button>
    </form>
    <?php
    } else {
    echo "Record not found.";
}
?>

</body>
</html>
<?php
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{

    $Iname=($_POST['Iname']);
    $Quantity=($_POST['Quantity']);
    $Rate=($_POST['Rate']);
    $value=($_POST['value']);
    $Discount=($_POST['Discount']);
    $perdiscount=($_POST['perdiscount']);
    $Total=($_POST['Total']);
    $Billing=($_POST['Billing']);
    $g_name=($_POST['g_name']);
    $supplier=($_POST['supplier']);
    $vehicalNumber=($_POST['vehicalNumber']);
    $invoice=($_POST['invoice']);
    $date=($_POST['date']);
    
    $sql="UPDATE `stock` SET `Iname`='$Iname',`Quantity`='$Quantity',`Rate`='$Rate',`value`='$value',`Discount`='$Discount',`perdiscount`='$perdiscount',`Total`='$Total',`Billing`='$Billing',`g_name`='$g_name',`supplier`='$supplier',`vehicalNumber`='$vehicalNumber',`invoice`='$invoice',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
         header('location:readstockreceiving.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>