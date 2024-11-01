<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Register</title>
    <link rel="stylesheet" href="tablesStyles.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>
    <h1>Cash Register</h1>
    <h3>Ali Rauf Traders</h3>
    <input type="date" id="date" placeholder="DD-MM-YYYY" >
    <h4 id="dateContainer" >.</h4>

  

        <form method="post" action="">
            <span style="width:30rem; padding:1rem;" class="top-inputs">
            <span>
                <span>

                    
                    <label for="name">From:</label>
                    <input type="date" name="startDate">
                </span>

                <span>

                    <label for="name">TO :</label>
                    <input type="date" name="endDate">
                </span>
            </span>
            <span>
                

            </span>
            <span>
                <button type="submit">Read Record</button>
                <button onclick="window.print()">Print</button>
                
            </span>
        </span>
    </form>
        <div>
          
            <table border="solid 2px">
        <thead>
            <tr>
                <th>Date</th>
                <th>Opening Balance</th>
                <th>Despatch</th>
                <th>Discount</th>
                <th>Goods</th>
                <th>Claim</th>
                <th>Recovery</th>
                <th>Closing Balance</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <span >
        <?php

        $startDate = isset($_POST["startDate"]) ? $_POST["startDate"] : "";
        $endDate = isset($_POST["endDate"]) ? $_POST["endDate"] : "";

        $sql = "SELECT * FROM cashregister WHERE 1";
        
        if (!empty($startDate) || !empty($endDate)) {
            $sql .= " AND date BETWEEN '$startDate' AND '$endDate'";
        }
            $result = $con->query($sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $date = $row['date'];
                    $openingBalance = $row['openingBalance'];
                    $dispatch = $row['dispatch'];
                    $discount = $row['discount'];
                    $goods = $row['goods'];
                    $claim = $row['claim'];
                    $recovery = $row['recovery'];
                    $total = $openingBalance + $dispatch - $discount - $goods - $claim - $recovery;

                    echo '<tr data-id="' . $id . '">
                    <td>' . $date . '</td>
                            <td>' . $openingBalance . '</td>
                            <td class="dispatch" >' . $dispatch . '</td>
                            <td class="discount">' . $discount . '</td>
                            <td class="goods">' . $goods . '</td>
                            <td class="claim">' . $claim . '</td>
                            <td class="recovery">' . $recovery . '</td>
                            <td>' . $total . '</td>
                            </tr>';
                            
                }
            }                                          
                ?>
                
                </span>
            </tbody>
        </table>
      
    </div>
</div>
<div class="bottomFields"  >
    <h3  id="tdispatch" type="number" >.</h3>
    <h3  id="tdiscount" type="number" >.</h3>
    <h3  id="tgoods" type="number" >.</h3>
    <h3  id="tclaim" type="number" >.</h3>
    <h3  id="trecovery" type="number" >.</h3>
</div>
</body>
</html>
<script >

    const nodeList = document.querySelectorAll(".dispatch");
              let tdispatch = 0;
              for (let i = 0; i < nodeList.length; i++) {
  
    let bill = parseInt(nodeList[i].innerHTML)
     tdispatch = tdispatch + bill;
    console.log(tdispatch)
    document.getElementById('tdispatch').innerHTML = 'Total Dispatch:' + tdispatch
  }
    const nodeList1 = document.querySelectorAll(".discount");
              let tdiscount = 0;
              for (let i = 0; i < nodeList1.length; i++) {
  
    let bill = parseInt(nodeList1[i].innerHTML)
     tdiscount = tdiscount + bill;
    console.log(tdiscount);
    document.getElementById('tdiscount').innerHTML = 'Total Discount:' + tdiscount
  }
    const nodeList2 = document.querySelectorAll(".goods");
              let tgoods = 0;
              for (let i = 0; i < nodeList2.length; i++) {
  
    let goods = parseInt(nodeList2[i].innerHTML)
    tgoods = tgoods + goods;
    console.log(tgoods );
    document.getElementById('tgoods').innerHTML = 'Total Goods: ' + tgoods
  }
          const nodeList3 = document.querySelectorAll(".claim");
              let tclaim = 0;
  for (let i = 0; i < nodeList3.length; i++) {
  
    let claim = parseInt(nodeList3[i].innerHTML)
    tclaim = tclaim + claim;
    console.log(tclaim)
    document.getElementById('tclaim').innerHTML = 'Total Claim: ' + tclaim
}
          const nodeList4 = document.querySelectorAll(".recovery");
              let trecovery = 0;
  for (let i = 0; i < nodeList4.length; i++) {
  
    let recovery = parseInt(nodeList4[i].innerHTML)
    trecovery = trecovery + recovery;
    console.log(trecovery)
    document.getElementById('trecovery').innerHTML ='Total Recovery: ' +  trecovery
}

let n =  new Date();
     let y = n.getFullYear();
     let m = n.getMonth() + 1;
     let d = n.getDate();
     document.getElementById("dateContainer").innerHTML = "Date: " + d + "/" + m + "/" + y;
     
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