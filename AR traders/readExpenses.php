<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Expenses</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script defer>
        
$(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleteexpense.php',
                    data: { id: recordId },
                    success: function(response) {
                        if (response === 'success') {
                            $(`tr[data-id="${recordId}"]`).remove();
                        } else {
                            // alert('Error deleting record.');
                        }
                    }
                });
            });
        });

        
    </script>

</head>
<body>

<form method="post" action="">
    <span id="top-inputs">
        <span>
            <span>
                
                <label for="date">From:</label>
                <input type="date" name="startDate">
            </span>
            <span>
                                <label for="date">To:</label>
                                <input type="date" name="endDate">
                                
                            </span>
                        </span>
                        <span>
                            <span>
                <label for="personName">Person Name:</label>
                <input type="text" name="personName" id="personName" placeholder="Search person Name">
            </span>
        </span>
        <span>

           
                <button type="submit">Read Records</button>
                <button onclick="window.print()" >Print</button>
       
        </span>
    </span>
</form>
    
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $personName = isset($_POST["personName"]) ? $_POST["personName"] : "";
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM expenses WHERE 1";
        if (!empty($personName)) {
            $sql .= " AND personName LIKE '%$personName%'";
        }
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
            $result = $con->query($sql);
            if ($result) {
                echo "<table border='1'>
                        <tr>
                            <th>Expence</th>
                            <th>personName</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    echo "<tr data-id='" . $id . "'>
                            <td>" . $row["expense"] . "</td>
                            <td>" . $row["personName"] . "</td>
                            <td>" . $row["amount"] . "</td>
                            <td>" . $row["date"] . "</td>
                            <td>
                            <button class='delete-record' data-record-id='" . $id . "'>Delete</button>
                            <button><a href='updateexpense.php?updateid=" . $row["id"] . "'>Update</a></button>
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