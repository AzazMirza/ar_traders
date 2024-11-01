<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update client History</title>
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM goods WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form action="#" method="post">
        <label >Item Name</label>
        <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off"><br>
        <label >Client Name</label>
        <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>" autocomplete="off"><br>
        <label >Quantity</label>
        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" autocomplete="off"><br>
        <label >Rate</label>
        <input type="text" name="rate" value="<?php echo $row['rate']; ?>" autocomplete="off"><br>
        
        <label >Group Name</label>
        <input type="text" name="g_name" value="<?php echo $row['g_name']; ?>" autocomplete="off"><br>
        <label >Amount</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" autocomplete="off"><br>
        <label >Phone</label>
        <input type="number" name="phone" value="<?php echo $row['phone']; ?>" autocomplete="off"><br>
        <label >CNIC</label>
        <input type="number" name="cnic" value="<?php echo $row['cnic']; ?>" autocomplete="off"><br>
        <label >NTN</label>
        <input type="number" name="ntn" value="<?php echo $row['ntn']; ?>" autocomplete="off"><br>
        <label >Address</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" autocomplete="off"><br>
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
    $Iname=($_POST['Iname']);
    $c_name=($_POST['c_name']);
    $Quantity=($_POST['quantity']);
    $rate=($_POST['rate']);
    $g_name=($_POST['g_name']);
    $amount=($_POST['amount']);
    $phone=($_POST['phone']);
    $cnic=($_POST['cnic']);
    $ntn=($_POST['ntn']);
    $address=($_POST['address']);
    $city=($_POST['city']);
    $date=($_POST['date']);
    $sql="UPDATE `goods` SET `Iname`='$Iname',`c_name`='$c_name',`quantity`='$quantity',`rate`='$rate',`g_name`='$g_name',`amount`='$amount',`phone`='$phone',`cnic`='$cnic',`ntn`='$ntn',`address`='$address',`city`='$city',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:readgoods.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>