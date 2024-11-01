<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returend Goods</title>
    <link rel="stylesheet" href="group.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
                $(document).ready(function() {
                    $('#search').keyup(function() {
                        var search = $(this).val();
                        if (search !== "") {
                            $.ajax({
                                url: 'fetchstockname.php',
                                type: 'POST',
                                data: {search: search},
                                success: function(response) {
                                    $('#itemresult').fadeIn();
                                    $('#itemresult').html(response);
                                }
                            });
                        }
                    });
                    $(document).on('click', '#itemresult li', function() {
                        var name = $(this).text();
                        $('#search').val(name);
                        $('#itemresult').fadeOut();
                        $.ajax({
                            url: 'g_name.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#g_name').val(response);
                            }
                        });
                        $.ajax({
                            url: 'fetchSalesRate.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#rate').val(response);
                            }
                        })
                        });

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
                    $(document).on('click', '#clientresult li', function() {
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
                    var Iname = $('#search').val();
                    var Quantity = $('#quantity').val();
                    var Rate = $('#rate').val();
                    var g_name = $('#g_name').val();
                    var searchClient = $('#searchClient').val();
                    var address = $('#address').val();
                    var phone = $('#phone').val();
                    var cnic = $('#cnic').val();
                    var ntn = $('#ntn').val();
                    // var shopName = $('#shopName').val();
                    var city = $('#city').val();

                    $.ajax({
                    url: "insertgoods.php",
                    method: "POST",
                    data: {Iname: Iname,Rate: Rate,Quantity: Quantity,g_name: g_name,searchClient: searchClient,
                        address: address,phone: phone,cnic: cnic,ntn: ntn,city: city},
                    success: function(data) {
                        alert(data);
                        $('#search').val('');
                        $('#quantity').val('');
                        $('#rate').val('');
                        $('#g_name').val('');
                        $('#searchClient').val('');
                        $('#address').val('');
                        $('#phone').val('');
                        $('#cnic').val('');
                        $('#ntn').val('');
                        $('#city').val('');
                        
                    }
                    });
                });
                });
            </script>
            </head>
            <body>
            <h2>Returned Goods</h2>
            <form method="post" id="form" action="#">
                <div>
                <input type="text" placeholder="Search Item" id="search" name="search">
                <div id="itemresult"></div>
                <input type="text" placeholder="Search Client" id="searchClient" name="searchClient">
                <div id="clientresult"></div>
                <input type="text" id="quantity" name="quantity" placeholder="Quantity">
                <input type="text" id="address" name="address" placeholder="Address">
                <input type="number" id="phone" name="phone" placeholder="Phone">
                </div>
                <div>
                <input type="text" id="g_name" name="g_name" placeholder="Group Name">
                <input type="number" id="rate" name="rate" placeholder="Rate">
                <input type="number" id="cnic" name="cnic" placeholder="CNIC">
                <input type="number" id="ntn" name="ntn" placeholder="NTN">
                <input type="text" id="shopName" name="shopName" placeholder="Shop Name">
                <input type="text" id="city" name="city" placeholder="City">
                </div>
            </form>
                <div class="btndiv">
                <button type="button" name="insert" id="insert" value="insert">Insert</button>
                <a href="readgoods.php">
                    <button type="button" name="insert" id="insert" value="Insert">Read</button>
                </a>
                </div>
            </body>
            </html>