<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Received History</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deletebank.php',
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
    <h2>Bank Ledgers</h2>
    <form method="post" action="">
        <span id="top-inputs" >
            <span>
                <span>
            <label for="name">Enter Name:</label>
            <input type="text" name="c_name" id="c_name" placeholder="Search client Name">
                </span>
                <span>
            <label for="name">Client CNIC:</label>
            <input type="numbar" name="cnic" id="cnic" placeholder="Search CNIC">
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
            <span>
                <button type="submit">Read Record</button>
                <button onclick="window.print()" >Print </button>

            </span>
        </span>
        </form>
        
    <table border="solid 2px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Credit</th>
                <th>Paid Amount</th>
                <th>Debit</th>
                <th>Payment Type</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>CNIC</th>
                <th>NTN</th>
                <th>Shop Name</th>
                <th>City</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_name = isset($_POST["c_name"]) ? $_POST["c_name"] : "";
        $cnic = isset($_POST["cnic"]) ? $_POST["cnic"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM bank WHERE 1";
        if (!empty($c_name)) {
            $sql .= " AND c_name LIKE '%$c_name%'";
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
                    $c_name = $row['c_name'];
                    $credit = $row['credit'];
                    $amount = $row['amount'];
                    $paymentType = $row['paymentType'];
                    $debit = $row['debit'];
                    $address = $row['address'];
                    $phone = $row['phone'];
                    $cnic = $row['cnic'];
                    $ntn = $row['ntn'];
                    $shopName = $row['shopName'];
                    // $personName = $row['personName'];
                    $city = $row['city'];
                    $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $c_name . '</td>
                            <td>' . $credit . '</td>
                            <td>' . $amount . '</td>
                            <td>' . $paymentType . '</td>
                            <td>' . $debit . '</td>
                            <td>' . $address . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $cnic . '</td>
                            <td>' . $ntn . '</td>
                            <td>' . $shopName . '</td>
                            <td>' . $city . '</td>
                            <td>' . $date . '</td>
                            <td>
                                <button class="delete-record" data-record-id="' . $id . '">Delete</button>
                                <button><a href="updatebank.php?updateid=' . $id . '">Update</a></button>
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