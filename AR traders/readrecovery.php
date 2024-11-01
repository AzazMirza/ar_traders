<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Recovery Voucher</title>
    <link rel="stylesheet" href="tablesStyles.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleterecovery.php',
                    data: { id: recordId },
                    success: function(response) {
                        if (response === 'success') {
                            $(`tr[data-id="${recordId}"]`).remove();
                        } else {
                            alert('Error deleting record.');
                        }
                    }
                });
            });
        });
    </script>

</head>

<body>
    <div id="top-inputs" >
    <form method="post" action="">
        <label for="name">Client Name:</label>
        <input type="text" name="c_name" id="c_name" placeholder="Search Client Name">
        <label for="name">CNIC:</label>
        <input type="text" name="cnic" id="cnic" placeholder="Search CNIC"><br>
        <label for="name">Payment Type:</label>
        <input type="text" name="paymentType" id="paymentType" placeholder="Search Payment Type">
        <label for="name">Receiver Name:</label>
        <input type="text" name="receiver" id="receiver" placeholder="Search Receiver Name">
        <label for="name">From:</label>
        <input type="date" name="startDate">
        <label for="name">To:</label>
        <input type="date" name="endDate">
        <button type="submit">Read Records</button>
        <button onclick="window.print()" >Print</button>
    </form>
</div>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_name = isset($_POST["c_name"]) ? $_POST["c_name"] : "";
        $g_name = isset($_POST["g_name"]) ? $_POST["g_name"] : "";
        $cnic = isset($_POST["cnic"]) ? $_POST["cnic"] : "";
        $paymentType = isset($_POST["paymentType"]) ? $_POST["paymentType"] : "";
        $receiver = isset($_POST["receiver"]) ? $_POST["receiver"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM recovery WHERE 1";
        if (!empty($c_name)) {
            $sql .= " AND c_name LIKE '%$c_name%'";
        }
        if (!empty($cnic)) {
            $sql .= " AND cnic LIKE '%$cnic%'";
        }
        if (!empty($paymentType)) {
            $sql .= " AND paymentType LIKE '%$paymentType%'";
        }
        if (!empty($receiver)) {
            $sql .= " AND receiver LIKE '%$receiver%'";
        }
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
        // if(!empty($Iname) || !empty($g_name) || !empty($invoice) || !empty($supplier) ||!empty($startDate) || !empty($endDate)){
            $result = $con->query($sql);
            if ($result) {
                echo "<table border='1'>
                        <tr>
                            <th>Client Name</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Amount</th>
                            <th>Payment Type</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>CNIC</th>
                            <th>NTN</th>
                            <th>Shop Name</th>
                            <th>City</th>
                            <th>Receiver</th>
                            <th>Action</th>
                        </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        echo "<tr data-id='" . $id . "'>
                            <td>" . $row["c_name"] . "</td>
                            <td>" . $row["credit"] . "</td>
                            <td>" . $row["debit"] . "</td>
                            <td>" . $row["amount"] . "</td>
                            <td>" . $row["paymentType"] . "</td>
                            <td>" . $row["Address"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["cnic"] . "</td>
                            <td>" . $row["ntn"] . "</td>
                            <td>" . $row["shopName"] . "</td>
                            <td>" . $row["city"] . "</td>
                            <td>" . $row["receiver"] . "</td>
                            <td>
                            <button class='delete-record' data-record-id='" .$id . "'>Delete</button>
                            <button><a href='updaterecovery.php?updateid=" . $row["id"] . "'>Update</a></button>
                            </td>
                        </tr>";
                        
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        // }
   
// }
?>
</body>
</html>