<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update client History</title>
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM recovery WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form action="#" method="post">
        <label >Name</label>
        <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>" autocomplete="off"><br>
        <label >Credit</label>
        <input type="text" name="credit" value="<?php echo $row['credit']; ?>" autocomplete="off"><br>
        <label >Debit</label>
        <input type="text" name="debit" value="<?php echo $row['debit']; ?>" autocomplete="off"><br>
        <label >Amount</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" autocomplete="off"><br>
        <label >Address</label>
        <input type="text" name="Address" value="<?php echo $row['Address']; ?>" autocomplete="off"><br>
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
        <label >Receiver</label>
        <input type="text" name="receiver" value="<?php echo $row['receiver']; ?>" autocomplete="off"><br>
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
    $debit=($_POST['debit']);
    $amount=($_POST['amount']);
    $paymentType=($_POST['paymentType']);
    $Address=($_POST['Address']);
    $phone=($_POST['phone']);
    $cnic=($_POST['cnic']);
    $ntn=($_POST['ntn']);
    $shopName=($_POST['shopName']);
    // $personName=($_POST['personName']);
    $city=($_POST['city']);
    $receiver=($_POST['receiver']);
    $date=($_POST['date']);
    $sql="UPDATE `recovery` SET `c_name`='$c_name',`credit`='$credit',`debit`='$debit',`amount`='$amount',`paymentType`='$paymentType',`Address`='$Address',`phone`='$phone',`cnic`='$cnic',`ntn`='$ntn',`shopName`='$shopName',`receiver`='$receiver',`city`='$city',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:readrecovery.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>