<?php
    include 'connection.php';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "SELECT debit FROM `supplier` WHERE s_name='" . $name . "'";
        $result = $con->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo $row["debit"];
            }
        } else {
            echo "0 results";
        }
    }
    ?>