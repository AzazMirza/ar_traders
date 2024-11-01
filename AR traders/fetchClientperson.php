<?php
    include 'connection.php';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "SELECT personName FROM `clients` WHERE c_name='" . $name . "' ORDER BY id DESC LIMIT 1";
        $result = $con->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo $row["personName"];
            }
        } else {
            echo "0 results";
        }
    }
    ?>