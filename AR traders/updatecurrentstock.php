<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Current Stock</title>
    <link rel="stylesheet" href="group.css" >
</head>
<body style="display: flex; flex-direction: column; justify-content: center;">
    <h1>Update Current Stock</h1>

    <?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM stock WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form class="updateForm" id="form" action="#" method="post">
        <div>

            <label >Item Name</label>
            <input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" autocomplete="off"><br>
            <label >Quantity</label>
            <input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>" autocomplete="off"><br>
            <label >Purchase Rate</label>
            <input type="text" name="Rate" value="<?php echo $row['Rate']; ?>" autocomplete="off"><br>
            <label >Sales Rate</label>
            <input type="text" name="salesRate" value="<?php echo $row['salesRate']; ?>" autocomplete="off"><br>
            <label >Date</label>
            <input type="text" name="date" value="<?php echo $row['date']; ?>" autocomplete="off"><br>
        </div>
        <div class="btndiv">
            <button type="submit" onclick="getElementById('form').submit()" name="submit">Update</button>
            <button type="button" name="Read"><a href="viewcurrentstock.php" >Read</a></button>
            <button type="button" name="home"><a href="menu.html">Home</a></button>
            
        </div>
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
    $salesRate=($_POST['salesRate']);
    $date=($_POST['date']);
    
    $sql="UPDATE `stock` SET `Iname`='$Iname',`Quantity`='$Quantity',`Rate`='$Rate',`salesRate`='$salesRate'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        header('location:viewcurrentstock.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>