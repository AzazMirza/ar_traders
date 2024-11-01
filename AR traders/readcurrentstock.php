<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Records</title>
    <link rel="stylesheet" href="tablesStyles.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>


<body>
<!-- <img style="border-bottom: 2px black solid;" src="/images/google.jpg" height="100px" width="100px" > -->
    
    <h3>Ali Rauf Traders</h3>
    <input type="date" id="date" placeholder="DD-MM-YYYY" >
    <h4 id="dateContainer" >.</h4>


    <form method="post" action="">
        <span id="top-inputs" >
            <span  >
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
                    
                    <label for="name"> Invoice:</label>
                    <input type="number" name="invoice" id="invoice" placeholder="Search Invoice ">
                </span>
                <span>
                    
                    <label for="name">Supplier Name:</label>
                    <input type="text" name="supplier" id="supplier" placeholder="Search Supplier Name">
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
                <button type="button" onclick="window.print()" >Print</button>
            </span>
        </span>
    
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Iname = isset($_POST["Iname"]) ? $_POST["Iname"] : "";
        $g_name = isset($_POST["g_name"]) ? $_POST["g_name"] : "";
        $invoice = isset($_POST["invoice"]) ? $_POST["invoice"] : "";
        $supplier = isset($_POST["supplier"]) ? $_POST["supplier"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM stock WHERE 1";
        if (!empty($Iname)) {
            $sql .= " AND Iname LIKE '%$Iname%'";
        }
        if (!empty($g_name)) {
            $sql .= " AND g_name LIKE '%$g_name%'";
        }
        if (!empty($invoice)) {
            $sql .= " AND invoice LIKE '%$invoice%'";
        }
        if (!empty($supplier)) {
            $sql .= " AND supplier LIKE '%$supplier%'";
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
                            <th>Discount/Scheme</th>
                            <th>Discount %</th>
                            <th>Total Discount</th>
                            <th>Billing Price</th>
                            <th>Group Name</th>
                            <th>Suppliers</th>
                            <th>Vehical Number</th>
                            <th>Invoice</th>
                            <th>Action</th>
                        </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    echo "<tr data-id='" . $id . "'>
                            <td>" . $row["Iname"] . "</td>
                            <td>" . $row["Quantity"] . "</td>
                            <td>" . $row["Rate"] . "</td>
                            <td>" . $row["value"] . "</td>
                            <td>" . $row["Discount"] . "</td>
                            <td>" . $row["perdiscount"] . "</td>
                            <td>" . $row["Total"] . "</td>
                            <td>" . $row["Billing"] . "</td>
                            <td>" . $row["g_name"] . "</td>
                            <td>" . $row["supplier"] . "</td>
                            <td>" . $row["vehicalNumber"] . "</td>
                            <td>" . $row["invoice"] . "</td>
                            <td>
                            <button class='delete-record' data-record-id='" .$id . "'>Delete</button>
                            <button><a href='updatestockreceiving.php?updateid=" . $row["id"] . "'>Update</a></button>
                            </td>
                        </tr>";
                        
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        // }
?>
</body>
</html>

    <script defer >
    $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deletestockreciving.php',
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

    var date = new Date();
    const todaysDate = date.toLocaleDateString('pak')
  
    // Insert date and time into HTML
    document.getElementById("dateContainer").innerHTML = 'Date:' + todaysDate;

    </script>