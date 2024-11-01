<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update client History</title>
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM supplierhistory WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form action="#" method="post">
        <label >Name</label>
        <input type="text" name="s_name" value="<?php echo $row['s_name']; ?>" autocomplete="off"><br>
        <label >Old Credit</label>
        <input type="text" name="credit" value="<?php echo $row['credit']; ?>" autocomplete="off"><br>
        <label >Paid Amount</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" autocomplete="off"><br>
        <label >New Credit</label>
        <input type="text" name="newCredit" value="<?php echo $row['newCredit']; ?>" autocomplete="off"><br>
        <label >Debit</label>
        <input type="text" name="debit" value="<?php echo $row['debit']; ?>" autocomplete="off"><br>
        <label >Address</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" autocomplete="off"><br>
        <label >Phone</label>
        <input type="number" name="phone" value="<?php echo $row['phone']; ?>" autocomplete="off"><br>
        <label >CNIC</label>
        <input type="number" name="cnic" value="<?php echo $row['cnic']; ?>" autocomplete="off"><br>
        <label >NTN</label>
        <input type="number" name="ntn" value="<?php echo $row['ntn']; ?>" autocomplete="off"><br>
        <label >Shop Name</label>
        <input type="text" name="shopName" value="<?php echo $row['shopName']; ?>" autocomplete="off"><br>
        <label >Person Name</label>
        <input type="text" name="personName" value="<?php echo $row['personName']; ?>" autocomplete="off"><br>
        <label >Chalan Voucher</label>
        <input type="number" name="chalanvoucher" value="<?php echo $row['chalanvoucher']; ?>" autocomplete="off"><br>
        <label >Builty</label>
        <input type="number" name="builty" value="<?php echo $row['builty']; ?>" autocomplete="off"><br>
        <label >City</label>
        <input type="text" name="city" value="<?php echo $row['city']; ?>" autocomplete="off"><br>
        <label >Date</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off"><br><br>
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
    $s_name=($_POST['s_name']);
    $credit=($_POST['credit']);
    $amount=($_POST['amount']);
    $newCredit=($_POST['newCredit']);
    $debit=($_POST['debit']);
    $address=($_POST['address']);
    $phone=($_POST['phone']);
    $cnic=($_POST['cnic']);
    $ntn=($_POST['ntn']);
    $shopName=($_POST['shopName']);
    $personName=($_POST['personName']);
    $chalanvoucher=($_POST['chalanvoucher']);
    $builty=($_POST['builty']);
    $city=($_POST['city']);
    $date=($_POST['date']);
    $sql="UPDATE `supplierhistory` SET `s_name`='$s_name',`credit`='$credit',`amount`='$amount',`newCredit`='$newCredit',`debit`='$debit',`address`='$address',`phone`='$phone',`cnic`='$cnic',`ntn`='$ntn',`shopName`='$shopName',`personName`='$personName',`chalanvoucher`='$chalanvoucher',`builty`='$builty',`city`='$city',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:readSupplierHistory.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>