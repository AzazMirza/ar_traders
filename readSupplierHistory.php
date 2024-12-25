<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Suppliers History</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleteSupplierHistory.php',
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
<body >
    <h2>Suppliers History</h2>
    <form id="recordForm"  method="post" action="">
            <label for="name">Enter Name:</label>
            <input type="text" name="s_name" id="s_name" placeholder="Search Supplier Name">
            <label for="name">Suppliers CNIC:</label>
            <input type="numbar" name="cnic" id="cnic" placeholder="Search CNIC">
            <label for="name">From:</label>
            <input type="date" name="startDate">
            <label for="name">To:</label>
            <input type="date" name="endDate">
            <button type="submit">Read Record</button>
            <button type="button" onclick="window.print()" >Print</button>
        </form>
        
    <table border="solid 2px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Old Credit</th>
                <th>Paid Amount</th>
                <th>New Credit</th>
                <th>Debit</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>CNIC</th>
                <th>NTN</th>
                <th>Shop Name</th>
                <!-- <th>Person Name</th> -->
                <th>Chalan Voucher</th>
                <th>Builty</th>
                <th>City</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_name = isset($_POST["s_name"]) ? $_POST["s_name"] : "";
        $cnic = isset($_POST["cnic"]) ? $_POST["cnic"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM supplierhistory WHERE 1";
        if (!empty($s_name)) {
            $sql .= " AND s_name LIKE '%$s_name%'";
        }
        if (!empty($cnic)) {
            $sql .= " AND cnic LIKE '%$cnic%'";
        }
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
            $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $s_name = $row['s_name'];
                    $credit = $row['credit'];
                    $amount = $row['amount'];
                    $newCredit = $row['newCredit'];
                    $debit = $row['debit'];
                    $address = $row['address'];
                    $phone = $row['phone'];
                    $cnic = $row['cnic'];
                    $ntn = $row['ntn'];
                    $shopName = $row['shopName'];
                    $personName = $row['personName'];
                    $chalanvoucher = $row['chalanvoucher'];
                    $builty = $row['builty'];
                    $city = $row['city'];
                    $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $s_name . '</td>
                            <td>' . $credit . '</td>
                            <td>' . $amount . '</td>
                            <td>' . $newCredit . '</td>
                            <td>' . $debit . '</td>
                            <td>' . $address . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $cnic . '</td>
                            <td>' . $ntn . '</td>
                            <td>' . $shopName . '</td>
                            <td>' . $chalanvoucher . '</td>
                            <td>' . $builty . '</td>
                            <td>' . $city . '</td>
                            <td>' . $date . '</td>
                            <td>
                                <button class="delete-record" data-record-id="' . $id . '">Delete</button>
                                <button><a href="updateSupplierHistory.php?updateid=' . $id . '">Update</a></button>
                            </td>
                          </tr>';
                }
            }
        // }
            ?>
        </tbody>
    </table>
</body>
</html> 