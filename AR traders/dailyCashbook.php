<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Cash Book</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button.delete-record').click(function(e) {
                e.preventDefault();
                var recordId = $(this).data('record-id');
                
                $.ajax({
                    type: 'POST',
                    url: 'deleteDailyCashBook.php',
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
    <h1>Daily Cash Book</h1>
  

        <form method="post" action="">
            <span style="width:30rem; padding:1rem;" id="top-inputs">
            <span>
                
                    <label for="name">Search By Date :</label>
                    <input type="date" name="startDate">

            </span>
            <span>
                <button type="submit">Read Record</button>
                <button onclick="window.print()">Print</button>
                
            </span>
        </span>
    </form>

    <div class="horizontal-flow">
        <div>
            
        <h2>Cash In</h2>
        <table border="solid 2px">
        <thead>
            <tr>
                <th>particulars</th>
                <th>Account Name</th>
                <th>Amount</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM clienthistory WHERE 1";
        
        if (!empty($startDate)) {
            $sql .= " AND date = '$startDate' ";
        }    $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $c_name = $row['c_name'];
                    $amount = $row['amount'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $id . '</td>
                            <td>' . $c_name . '</td>
                            <td>' . $amount . '</td>
                            </tr>';
                            
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div>

            <h2>Cash Out</h2>
            <table border="solid 2px">
        <thead>
            <tr>
                <th>particulars</th>
                <th>Account Name</th>
                <th>Amount</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";
        
        $sql = "SELECT * FROM expenses WHERE 1";
        
        if (!empty($startDate)) {
            $sql .= " AND date = '$startDate'";
            $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $expense = $row['expense'];
                    $amount = $row['amount'];
                    // $date = $row['date'];

                    echo '<tr data-id="' . $id . '">
                            <td>' . $id . '</td>
                            <td>' . $expense . '</td>
                            <td>' . $amount . '</td>
                            </tr>';
                            
                }
            }
        }
        $sql = "SELECT * FROM supplierradio WHERE 1";
        
        if (!empty($startDate) ) {
            $sql .= " AND date ='$startDate'";
            $result = $con->query($sql);
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $s_name = $row['s_name'];
                    $amount = $row['amount'];
                    // $date = $row['date'];
                    
                    echo '<tr data-id="' . $id . '">
                        <td>' . $id . '</td>
                        <td>' . $s_name . '</td>
                            <td>' . $amount . '</td>
                            </tr>';
                            
                        }
                    }
                }
                ?>
                
            </tbody>
        </table>
    </div>
</div>
</body>
</html>