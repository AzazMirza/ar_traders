<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Items</title>
    <link rel="stylesheet" href="group.css">
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM items WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<h1>Update Items</h1>
    <form action="#" method="post">
        <div>

            <label>Item Name</label>
            <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off">
            <label>Item Description</label>
            <input type="text" name="ItemDesc" value="<?php echo $row['ItemDesc']; ?>" autocomplete="off">
            <label>Rate</label>
            <input type="text" name="Rate" value="<?php echo $row['Rate']; ?>" autocomplete="off">
            <label>Sale Price</label>
            <input type="text" name="salePrice" value="<?php echo $row['salePrice']; ?>" autocomplete="off">
        </div>
        <div>

            <label>Whole Sale</label>
            <input type="text" name="wholeSale" value="<?php echo $row['wholeSale']; ?>" autocomplete="off">
            <label>Retail</label>
        <input type="text" name="retail" value="<?php echo $row['retail']; ?>" autocomplete="off">
        <label>Group Name</label>
        <input type="text" name="g_name" value="<?php echo $row['g_name']; ?>" autocomplete="off">
        <label>Date</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off">
    </div>

<div class="btndiv">

    <button type="submit" name="submit">Update</button>
</div>
</form>
<?php
} else {
    echo "Record not found.";
}
?>
<?php
if(isset($_POST['submit']))
{

    $Iname=($_POST['Iname']);
    $ItemDesc=($_POST['ItemDesc']);
    $Rate=($_POST['Rate']);
    $salePrice=($_POST['salePrice']);
    $wholeSale=($_POST['wholeSale']);
    $retail=($_POST['retail']);
    $g_name=($_POST['g_name']);
    $date=($_POST['date']);
    
    $sql="UPDATE `items` SET `Iname`='$Iname',`ItemDesc`='$ItemDesc',`Rate`='$Rate',`salePrice`='$salePrice',`wholeSale`='$wholeSale',`retail`='$retail',`g_name`='$g_name',`date`='$date' 
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
         header('location:readform1.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>