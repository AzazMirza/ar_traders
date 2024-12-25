<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Receive Ledgers</title>
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
        <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off"><br><br>
        <label >Quantity</label>
        <input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>" autocomplete="off"><br><br>
        <label >Billing</label>
        <input type="text" name="Billing" value="<?php echo $row['Billing']; ?>" autocomplete="off"><br>
        <label >Suppliers</label>
        <input type="text" name="supplier" value="<?php echo $row['supplier']; ?>" autocomplete="off"><br>
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
    $Quantity=($_POST['Quantity']);
    $Billing=($_POST['Billing']);
    $supplier=($_POST['supplier']);
    $date=($_POST['date']);
    $sql="UPDATE `stock` SET `Iname`='$Iname',`Quantity`='$Quantity',`Billing`='$Billing',`supplier`='$supplier',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:receiveLedgers.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>