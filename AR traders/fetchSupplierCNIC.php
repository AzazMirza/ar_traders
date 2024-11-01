<?php
    include 'connection.php';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "SELECT cnic FROM `supplier` WHERE s_name='" . $name . "' ORDER BY id DESC LIMIT 1";
        $result = $con->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo $row["cnic"];
            }
        } else {
            echo "0 results";
        }
    }
?>