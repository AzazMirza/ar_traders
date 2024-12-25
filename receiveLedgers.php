<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Ledgers</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleteReceiveledger.php',
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
    <h2>Receive Ledgers</h2>
    <form method="post" action="">
        <span id="top-inputs">
        <span>
        <span>

            <label for="name">Enter Name:</label>
            <input type="text" name="Iname" id="Iname" placeholder="Search Item Name">
        </span>
        <span>

            <label for="name">Enter Supplier Name:</label>
            <input type="text" name="supplier" id="supplier" placeholder="Search supplier Name">
        </span>
        </span>
        <span>
            <span>
                <label for="name">From:</label>
                <input type="date" name="startDate">

            </span>
            <span>
                <label for="name">To:</label>
                <input type="date" name="endDate">

            </span>
        </span>
            <span class="btndiv">
                <button type="submit">Read Record</button>
                <button onclick="window.print()">Print</button>
                
            </span>
    </span>
        </form>
        
    <table border="solid 2px">
        <thead>
            <tr>
                <th>Items Name</th>
                <th>Quantity</th>
                <th>Total Bill</th>
                <th>Suppliers Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php

        
        $Iname = isset($_POST["Iname"]) ? $_POST["Iname"] : "";
        $supplier = isset($_POST["supplier"]) ? $_POST["supplier"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM stock WHERE 1";
        if (!empty($Iname)) {
            $sql .= " AND Iname LIKE '%$Iname%'";
        }
        if (!empty($supplier)) {
            $sql .= " AND supplier LIKE '%$supplier%'";
        }
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
            $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $Iname = $row['Iname'];
                    $Quantity = $row['Quantity'];
                    $billing = $row['Billing'];
                    $supplier = $row['supplier'];
                    $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $Iname . '</td>
                            <td>' . $Quantity . '</td>
                            <td>' . $billing . '</td>
                            <td>' . $supplier . '</td>
                            <td>' . $date . '</td>
                            <td>
                                <button class="delete-record" data-record-id="' . $id . '">Delete</button>
                                <button><a href="updatereceiveledger.php?updateid=' . $id . '">Update</a></button>
                            </td>
                          </tr>';
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html> 