
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Ledgers</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleteSalesLedgers.php',
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
    <h1>Sales Ledgers</h1>
    <h3>Ali Rauf Traders</h3>
    <input type="date" id="date" placeholder="DD-MM-YYYY" >
    <h4 id="dateContainer" >.</h4>
    
    <form method="post" action="">
        <span id="top-inputs" >
        <span>
            <label for="name">Enter Name:</label>
            <input type="text" name="Iname" id="Iname" placeholder="Search Item Name">
            <label for="name">Client Name:</label>            
            <input type="text" name="Client" id="Client" placeholder="Search Client Name">
    </span>
    <span>
        <label for="name">From:</label>
        <input type="date" name="startDate">
        <label for="name">To:</label>
        <input type="date" name="endDate">
    </span>
        <span>
            <button type="submit">Read Record</button>
            <button type="button" onclick="window.print()" >Print</button>
    </span>
    </span>
        </form>
    <table border="solid 2px">
        <thead>
            <tr>
                <th>items Name</th>
                <th>Quantity</th>
                <th>Total Bill</th>
                <th>Clients Name</th>
                <th>Date</th>
                <th class="action" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $Iname = isset($_POST["Iname"]) ? $_POST["Iname"] : "";
                    $Client = isset($_POST["Client"]) ? $_POST["Client"] : "";
                    $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
                    $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
                    
                    $sql = "SELECT * FROM `stocksales` WHERE 1";
                    if (!empty($Iname)) {
                        $sql .= " AND Iname LIKE '%$Iname%'";
                    }
                    if (!empty($Client)) {
                        $sql .= " AND Client LIKE '%$Client%'";
                    }
                    if (!empty($startDate) || !empty($endDate)) {
                        $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
                    }
            $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $Iname = $row['Iname'];
                    $Quantity = $row['sQuantity'];
                    $billing = $row['Billing'];
                    $Client=$row['Client'];
                    $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $Iname . '</td>
                            <td>' . $Quantity . '</td>
                            <td>' . $billing . '</td>
                            <td>' .$Client. '</td>
                            <td>' . $date . '</td>
                            <td class="action">
                                <button class="delete-record" data-record-id="' . $id . '">Delete</button>
                                <button><a href="updatesalesledger.php? updateid='.$row["id"].'">Update</a></button>
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


