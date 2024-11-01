<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Bank Ledgers</title>
    <link rel="stylesheet" href="group.css" >
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM bank WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form class="updateForm" id="form" action="#" method="post">
        <label >Name</label>
        <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>" autocomplete="off"><br>
        <label >Credit</label>
        <input type="text" name="credit" value="<?php echo $row['credit']; ?>" autocomplete="off"><br>
        <label >Paid Amount</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" autocomplete="off"><br>
        <label >Debit</label>
        <input type="text" name="debit" value="<?php echo $row['debit']; ?>" autocomplete="off"><br>
        <label >Payment Type</label>
        <input type="text" name="paymentType" value="<?php echo $row['paymentType']; ?>" autocomplete="off"><br>
        <label >Address</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" autocomplete="off"><br>
        <label >Phone Number</label>
        <input type="number" name="phone" value="<?php echo $row['phone']; ?>" autocomplete="off"><br>
        <label >CNIC</label>
        <input type="number" name="cnic" value="<?php echo $row['cnic']; ?>" autocomplete="off"><br>
        <label >NTN</label>
        <input type="number" name="ntn" value="<?php echo $row['ntn']; ?>" autocomplete="off"><br>
        <label >Shop Name</label>
        <input type="text" name="shopName" value="<?php echo $row['shopName']; ?>" autocomplete="off"><br>
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
    $c_name=($_POST['c_name']);
    $credit=($_POST['credit']);
    $amount=($_POST['amount']);
    $debit=($_POST['debit']);
    $paymentType=($_POST['paymentType']);
    $address=($_POST['address']);
    $phone=($_POST['phone']);
    $cnic=($_POST['cnic']);
    $ntn=($_POST['ntn']);
    $shopName=($_POST['shopName']);
    $city=($_POST['city']);
    $date=($_POST['date']);
    $sql="UPDATE `bank` SET `c_name`='$c_name',`credit`='$credit',`amount`='$amount',`debit`='$debit',`paymentType`='$paymentType',`address`='$address',`phone`='$phone',`cnic`='$cnic',`ntn`='$ntn',`shopName`='$shopName',`city`='$city',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:readbankledger.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>