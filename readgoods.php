<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read goods History</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deletegoods.php',
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
    <h2>Goods History</h2>
    <form id="recordForm" method="post" action="">
            <label for="name">Enter Client Name:</label>
            <input type="text" name="c_name" id="c_name" placeholder="Search client Name">
            <label for="name">Enter item Name:</label>
            <input type="text" name="Iname" id="Iname" placeholder="Search Item Name">
            <label for="name">Client CNIC:</label>
            <input type="numbar" name="cnic" id="cnic" placeholder="Search CNIC">
            <label for="name">Group Name:</label>
            <input type="numbar" name="g_name" id="g_name" placeholder="Search CNIC">
            <label for="name">From:</label>
            <input type="date" name="startDate">
            <label for="name">To:</label>
            <input type="date" name="endDate">
            <button type="submit">Read Record</button>
        </form>
        
    <table border="solid 2px">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Client Name</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Amount</th>
                <th>Group Name</th>
                <th>Phone Number</th>
                <th>CNIC</th>
                <th>NTN</th>
                <th>Address</th>
                <th>City</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_name = isset($_POST["c_name"]) ? $_POST["c_name"] : "";
        $Iname = isset($_POST["Iname"]) ? $_POST["Iname"] : "";
        $g_name = isset($_POST["g_name"]) ? $_POST["g_name"] : "";
        $cnic = isset($_POST["cnic"]) ? $_POST["cnic"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM goods WHERE 1";
        if (!empty($Iname)) {
            $sql .= " AND Iname LIKE '%$Iname%'";
        }
        if (!empty($c_name)) {
            $sql .= " AND c_name LIKE '%$c_name%'";
        }
        if (!empty($g_name)) {
            $sql .= " AND g_name LIKE '%$g_name%'";
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
                    $Iname = $row['Iname'];
                    $c_name = $row['c_name'];
                    $quantity = $row['quantity'];
                    $rate = $row['rate'];
                    $amount = $row['amount'];
                    $g_name = $row['g_name'];
                    $phone = $row['phone'];
                    $cnic = $row['cnic'];
                    $ntn = $row['ntn'];
                    $address = $row['address'];
                    $city = $row['city'];
                    $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $Iname . '</td>
                            <td>' . $c_name . '</td>
                            <td>' . $quantity . '</td>
                            <td>' . $rate . '</td>
                            <td>' . $amount . '</td>
                            <td>' . $g_name . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $cnic . '</td>
                            <td>' . $ntn . '</td>
                            <td>' . $address . '</td>
                            <td>' . $city . '</td>
                            <td>' . $date . '</td>
                            <td>
                                <button class="delete-record" data-record-id="' . $id . '">Delete</button>
                                <button><a href="updategoods.php?updateid=' . $id . '">Update</a></button>
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