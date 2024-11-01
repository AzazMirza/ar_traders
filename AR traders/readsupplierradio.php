<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Payed History</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deletesupplierradio.php',
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
    <h2>Cash Payed History</h2>
    <form method="post" action="">
        <span id="top-inputs">
            <span>
                <span>

                    <label for="name">Enter Name:</label>
                    <input type="text" name="s_name" id="s_name" placeholder="Search Supplier Name">
                </span>
                <span>

                    <label for="name">Supplier CNIC:</label>
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
        $s_name = isset($_POST["s_name"]) ? $_POST["s_name"] : "";
        $cnic = isset($_POST["cnic"]) ? $_POST["cnic"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM supplierradio WHERE 1";
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
                    // $newCredit = $row['newCredit'];
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
                            <td>' . $s_name . '</td>
                            <td>' . $credit . '</td>
                            <td>' . $amount . '</td>
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
                                <button><a href="updatesupplierradio.php?updateid=' . $id . '">Update</a></button>
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