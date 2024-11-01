<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Recovery Voucher</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="group.css" > 
    <script>
                $(document).ready(function() {
                    $("#searchClient").keyup(function() {
                        var searchClient = $(this).val();
                        if (searchClient !== "") {
                            $.ajax({
                                url: 'fetchclientname.php',
                                type: 'POST',
                                data: {searchClient: searchClient},
                                success: function(response) {
                                    $('#clientresult').fadeIn();
                                    $('#clientresult').html(response);
                                }
                            });
                        }
                    });
                    $(document).on('click', 'li', function() {
                        var name = $(this).text();
                        $('#searchClient').val(name);
                        $('#clientresult').fadeOut();
                        $.ajax({
                            url: 'fetchclientdebit.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#clientDebit').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientAddress.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#address').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientPhone.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#phone').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientCNIC.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#cnic').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientNTN.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#ntn').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientShop.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#shopName').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchClientperson.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#personName').val(response);
                            }
                        });
                        
                        $.ajax({
                            url: 'fetchClientCity.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#city').val(response);
                            }
                        });
                    });

                    
                    $('#insert').click(function() {
                        var searchClient = $('#searchClient').val();
                        // var clientCredit = $('#clientCredit').val();
                        var amount = $('#amount').val();
                        // var newCredit =$('#newCredit').val();
                        var debit =$('#newDebit').val();
                        var address =$('#address').val();
                        var phone =$('#phone').val();
                        var cnic =$('#cnic').val();
                        var ntn =$('#ntn').val();
                        var shopName =$('#shopName').val();
                        var receiver =$('#receiver').val();
                        // var personName =$('#personName').val();
                        var city =$('#city').val();
                        var paymentType =$('#paymentType').val();

                    $.ajax({
                        url: "insertRecovery.php",
                        method: "POST",
                        data: { searchClient:searchClient,debit:debit,address:address,phone:phone,cnic:cnic,ntn:ntn,shopName:shopName,city:city,
                                paymentType:paymentType,amount:amount,receiver:receiver},
                            success: function(data) {
                        alert(data);
                        
                        $('#searchClient').val('');
                        $('#clientDebit').val('');
                        $('#amount').val('');
                        // $('#vehicalNumber').val('');
                        $('#newDebit').val('');
                        $('#debit').val('');
                        $('#address').val('');
                        $('#phone').val('');
                        $('#cnic').val('');
                        $('#ntn').val('');
                        $('#shopName').val('');
                        $('#receiver').val('');
                        // $('#personName').val('');
                        $('#city').val('');
                        $('#paymentType').val('');
                        }
                    });
                });
            });
    </script>
</head>
<body>   
    <h1> Recovery Voucher </h1> 
    <form method="post" id="form" action="#">
            <div>
                <form>
        <input type="text" placeholder="Search Client" id="searchClient" name="searchClient">
               <div id="clientresult"></div>
            <input type="text" id="clientDebit" name="clientDebit" placeholder="Client Debit">
            <input type="text" id="amount" name="amount" placeholder="amount">
            <input type="text" id="newDebit" name="newDebit" placeholder="New Debit" readonly>
            <input type="text" id="address" name="address" placeholder="Address">
            <input type="number" id="phone" name="phone" placeholder="Phone">
                </div>
                <div>

                    <input type="number" id="cnic" name="cnic" placeholder="CNIC">
                    <input type="number" id="ntn" name="ntn" placeholder="NTN">
            <input type="text" id="shopName" name="shopName" placeholder="Shop Name">
            <input type="text" id="receiver" name="receiver" placeholder="Receiver">
            <!-- <input type="text" id="personName" name="personName" placeholder="Person Name"> -->
            <input type="text" id="city" name="city" placeholder="City">
            <select class="select" id="paymentType" Placeholder="Payment Type" name="paymentType">
                <option value=''>Choose Payment Type...</option>
                <option value="Cash">Cash Payment</option>
                <option value="Cheque">Cheque Payment</option>
                <option value="bank">Bank Payment</option>
            </select>
        </div>
    </form>
    <div class="btndiv" >
            <button  type="submit" name="insert" id="insert" value="insert">Insert </button> 
            <a href="readrecovery.php"><button type="button" name="insert" id="insert" value="Insert" > Read </button></a> 
        </div>
        </form>
</body>
</html>
