<?php
include 'connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $delete_sql = "DELETE FROM stockhistory WHERE id = $id";
    $delete_result = $con->query($delete_sql);

    if ($delete_result) {
        echo "success";
    } else {
        echo "error";
    }
}
?>