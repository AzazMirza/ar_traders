<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Payed</title>
    <link rel="stylesheet" href="group.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
                $(document).ready(function() {
                    $("#searchSupplier").keyup(function() {
                        var searchSupplier = $(this).val();
                        if (searchSupplier !== "") {
                            $.ajax({
                                url: 'fetchsuppliername.php',
                                type: 'POST',
                                data: {searchSupplier: searchSupplier},
                                success: function(response) {
                                    $('#supplierresult').fadeIn();
                                    $('#supplierresult').html(response);
                                }
                            });
                        }
                    });
                    $(document).on('click', 'li', function() {
                        var name = $(this).text();
                        $('#searchSupplier').val(name);
                        $('#supplierresult').fadeOut();
                        $.ajax({
                            url: 'fetchsuppliercredit.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#supplierCredit').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSupplierAddress.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#address').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSupplierPhone.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#phone').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSupplierCNIC.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#cnic').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSupplierNTN.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#ntn').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSupplierShop.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#shopName').val(response);
                            }
                        });
                        
                        $.ajax({
                            url: 'fetchSupplierCity.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#city').val(response);
                            }
                        });
                    });

                    
                    $('#insert').click(function() {
                        var searchSupplier = $('#searchSupplier').val();
                        var supplierCredit = $('#supplierCredit').val();
                        var amount = $('#amount').val();
                        var newCredit =$('#newCredit').val();
                        var address =$('#address').val();
                        var phone =$('#phone').val();
                        var cnic =$('#cnic').val();
                        var ntn =$('#ntn').val();
                        var shopName =$('#shopName').val();
                        var city =$('#city').val();
                        var paymentType =$('#paymentType').val();

                    $.ajax({
                        url: "insertsupplierradio.php",
                        method: "POST",
                        data: { searchSupplier:searchSupplier,supplierCredit:supplierCredit,newCredit:newCredit,address:address,phone:phone,cnic:cnic,ntn:ntn,shopName:shopName,city:city,
                                paymentType:paymentType,amount:amount},
                            success: function(data) {
                        alert(data);
                        
                        $('#searchSupplier').val('');
                        $('#supplierCredit').val('');
                        $('#amount').val('');
                        $('#vehicalNumber').val('');
                        $('#newCredit').val('');
                        $('#address').val('');
                        $('#phone').val('');
                        $('#cnic').val('');
                        $('#ntn').val('');
                        $('#shopName').val('');
                        $('#city').val('');
                        $('#paymentType').val('');
                        }
                    });
                });
            });
    </script>
</head>
<body>    
    <h1>Cash Payed</h1>
        <form method="post" action="#">
            <div>
        <input type="text" placeholder="Search Supplier" id="searchSupplier" name="searchSupplier">
               <div id="supplierresult"></div>
            <input type="text" id="supplierCredit" name="supplierCredit" placeholder="Supplier Credits">
            <input type="text" id="amount" name="amount" placeholder="amount">
            <input type="text" id="newCredit" name="newCredit" placeholder="New Credit" readonly>
            <input type="text" id="address" name="address" placeholder="Address">
            <input type="number" id="phone" name="phone" placeholder="Phone">
        </div>
        <div>
            <input type="number" id="cnic" name="cnic" placeholder="CNIC">
            <input type="number" id="ntn" name="ntn" placeholder="NTN">
            <input type="text" id="shopName" name="shopName" placeholder="Shop Name">
            <input type="text" id="city" name="city" placeholder="City">
            <select class="select" id="paymentType" Placeholder="Payment Type" name="paymentType">
                <option value="">Choose Payment Type...</option>
                <option value="Cash">Cash Payment</option>
                <option value="Cheque">Cheque Payment</option>
                <option value="bank">Bank Payment</option>
                </select>
            </div>

        </form>
        <div class="btndiv">
        <button type="submit" name="insert" id="insert" value="insert"> Insert </button> 
            <a href="readsupplierradio.php"><button type="button" name="insert" id="insert" value="Insert" > Read </button></a> 
        </div>
</body>
</html>

