<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Stock Selling</title>
    <link rel="stylesheet" href="tablesStyles.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deletestockselling.php',
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
    <h1>Stock Sold History</h1>
    <div id="top-inputs" >
    <form method="post" action="">
        <span class="top-inputs">
            <span>
                <span>
                    <label for="name">Item Name:</label>
                    <input type="text" name="Iname" id="Iname" placeholder="Search Item Name">

                </span>
                <span>
                    <label for="name">Group Name:</label>
                    <input type="text" name="g_name" id="g_name" placeholder="Search Group Name">

                </span>
            </span>
            <span>
                <span>
                    <label for="name">Invoice:</label>
                    <input type="text" name="invoice" id="invoice" placeholder="Search Invoice Number">

                </span>
                <span>
                    <label for="name">Client Name:</label>
                    <input type="text" name="Client" id="Client" placeholder="Search client Name">

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
                <button type="submit">Read Records</button>
                <button onclick="window.print()" >Print</button>

            </span>

    </span>
    </form>
</div>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Iname = isset($_POST["Iname"]) ? $_POST["Iname"] : "";
        $g_name = isset($_POST["g_name"]) ? $_POST["g_name"] : "";
        $invoice = isset($_POST["invoice"]) ? $_POST["invoice"] : "";
        $Client = isset($_POST["Client"]) ? $_POST["Client"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM stocksales WHERE 1";
        if (!empty($Iname)) {
            $sql .= " AND Iname LIKE '%$Iname%'";
        }
        if (!empty($g_name)) {
            $sql .= " AND g_name LIKE '%$g_name%'";
        }
        if (!empty($invoice)) {
            $sql .= " AND invoice LIKE '%$invoice%'";
        }
        if (!empty($client)) {
            $sql .= " AND client LIKE '%$client%'";
        }
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
        // if(!empty($Iname) || !empty($g_name) || !empty($invoice) || !empty($supplier) ||!empty($startDate) || !empty($endDate)){
            $result = $con->query($sql);
            if ($result) {
                echo "<table border='1'>
                        <tr>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Without Discount</th>
                            <th>Discount / Scheme</th>
                            <th>Discount %</th>
                            <th>Total Discount</th>
                            <th>Billing Price</th>
                            <th>Group Name</th>
                            <th>Client Name</th>
                            <th>Vehical Number</th>
                            <th>Invoice</th>
                            <th>Action</th>
                        </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        echo "<tr data-id='" . $id . "'>
                            <td>" . $row["Iname"] . "</td>
                            <td>" . $row["sQuantity"] . "</td>
                            <td>" . $row["Rate"] . "</td>
                            <td>" . $row["value"] . "</td>
                            <td>" . $row["Discount"] . "</td>
                            <td>" . $row["perdiscount"] . "</td>
                            <td>" . $row["Total"] . "</td>
                            <td>" . $row["Billing"] . "</td>
                            <td>" . $row["g_name"] . "</td>
                            <td>" . $row["Client"] . "</td>
                            <td>" . $row["vehicalNumber"] . "</td>
                            <td>" . $row["invoice"] . "</td>
                            <td>
                            <button class='delete-record' data-record-id='" .$id . "'>Delete</button>
                            <button><a href='updatestockselling.php?updateid=" . $row["id"] . "'>Update</a></button>
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