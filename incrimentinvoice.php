<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $lastinvoice = intval(isset($_POST['invoice']));
    // $lastinvoice = intval($_POST['invoice']);
    
    // $lastinvoice = intval(isset($_POST['invoice']) ? $_POST['invoice'] : 'SELECT invoice FROM `stock` ORDER BY invoice DESC LIMIT 1');

    $newinvoice = $lastinvoice + 1;

    echo $newinvoice;
}


// 
//     $lastinvoice = intval($_POST['invoice']);
//     $newinvoice = $lastinvoice + 1;
//     echo $newinvoice;
// }
?>