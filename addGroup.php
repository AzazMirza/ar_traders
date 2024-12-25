<?php
include 'connection.php';

$g_name = $_POST['name'];
    if (!empty($g_name)){
        $sql = "INSERT INTO `group` (g_name) VALUES ('$g_name')";

        if ($con->query($sql) === TRUE) {
            echo "Group $g_name added successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    } else {
        echo "Please Enter a Group Name";
    }
?>