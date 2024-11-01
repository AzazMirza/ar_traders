<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Sales Ledgers</title>
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
    
    <form action="#" method="post">
        <label >Item Name</label>
        <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off"><br>
        <label >Quantity</label>
        <input type="text" name="sQuantity" value="<?php echo $row['sQuantity']; ?>" autocomplete="off"><br>
        <label >Billing</label>
        <input type="text" name="Billing" value="<?php echo $row['Billing']; ?>" autocomplete="off"><br>
        <label >Suppliers</label>
        <input type="text" name="Client" value="<?php echo $row['Client']; ?>" autocomplete="off"><br>
        <label >Date</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off"><br>
        <button type="submit" name="submit">Update</button>
    </form>
    <?php
} else {
    echo "Record not found.";
}
?>
<?php
include 'connection.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    $Iname=($_POST['Iname']);
    $sQuantity=($_POST['sQuantity']);
    $Billing=($_POST['Billing']);
    $Client=($_POST['Client']);
    $date=($_POST['date']);
    $sql="UPDATE `stocksales` SET `Iname`='$Iname',`sQuantity`='$sQuantity',`Billing`='$Billing',`Client`='$Client',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:salesLedgers.php');
    }
    else{
        echo ("connection error");
    }
    }
?>

</body>
</html>