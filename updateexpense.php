<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update expenses</title>
</head>
<body>
<?php
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM expenses WHERE id = $id";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    
    <form action="#" method="post">
        <label >Expense</label>
        <input type="text" name="expense" value="<?php echo $row['expense']; ?>" autocomplete="off"><br>
        <label >Person Name</label>
        <input type="text" name="personName" value="<?php echo $row['personName']; ?>" autocomplete="off"><br>
        <label >Amount</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" autocomplete="off"><br>
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
    $expense=($_POST['expense']);
    $personName=($_POST['personName']);
    $amount=($_POST['amount']);
    $date=($_POST['date']);
    $sql="UPDATE `expenses` SET `expense`='$expense',`personName`='$personName',`amount`='$amount',`date`='$date'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        // echo"update successfully";
        header('location:readExpenses.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
</body>
</html>