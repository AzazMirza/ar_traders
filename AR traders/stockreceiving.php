<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Receiving</title>
    <link rel="stylesheet" src="stockreceiving.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    
<script>
            function updateInvoice() {
                $.ajax({
        url: 'fetchmaxinvoice.php', 
        method: 'GET',
        success: function(data) {
            var newInvoice = parseInt(data) + 1;
            $('#invoice').val(newInvoice);
        },
            error: function(error) {
            console.error('Error fetching previous invoice:', error);
        }
    });         }
                $(document).ready(function() {
                    $('#search').keyup(function() {
                        var search = $(this).val();
                        if(search != "") {
                        $.ajax({
                            url: "fetchstockname.php",
                            type: "POST",
                            data: {search: search},
                            success: function(response) {
                                $('#result').fadeIn();
                                $('#result').html(response);
                            }
                        });
                        }
                    });
                    $(document).on('click','#d', function() {
                        var name = $(this).text();
                        $('#search').val(name);
                        $('#result').fadeOut();
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate').val(response);
                        }
                        });

                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity').val(response);
                        }
                        });
                        
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name').val(response);
                            }
                        });

                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });



                    $('#search1').keyup(function() {
                        var search1 = $(this).val();
                        if(search1 != "") {
                        $.ajax({
                            url: "fetchstockname1.php",
                            type: "POST",
                            data: {search1: search1},
                            success: function(response) {
                            $('#result1').html(response);
                            }
                        });
                        }
                        else {
                        $('#result1').html("");
                        }
                    });
                    $(document).on('click', '#d1', function() {
                        var name = $(this).text();
                        $('#search1').val(name);
                        $('#result1').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate1').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity1').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name1').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search2').keyup(function() {
                        var search2 = $(this).val();
                        if(search2 != "") {
                        $.ajax({
                            url: "fetchstockname2.php",
                            type: "POST",
                            data: {search2: search2},
                            success: function(response) {
                            $('#result2').html(response);
                            }
                        });
                        }
                        else {
                        $('#result2').html("");
                        }
                    });
                    $(document).on('click', '#d2', function() {
                        var name = $(this).text();
                        $('#search2').val(name);
                        $('#result2').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate2').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity2').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name2').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search3').keyup(function() {
                        var search3 = $(this).val();
                        if(search3 != "") {
                        $.ajax({
                            url: "fetchstockname3.php",
                            type: "POST",
                            data: {search3: search3},
                            success: function(response) {
                            $('#result3').html(response);
                            }
                        });
                        }
                        else {
                        $('#result3').html("");
                        }
                    });
                    $(document).on('click', '#d3', function() {
                        var name = $(this).text();
                        $('#search3').val(name);
                        $('#result3').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate3').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity3').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name3').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search4').keyup(function() {
                        var search4 = $(this).val();
                        if(search4 != "") {
                        $.ajax({
                            url: "fetchstockname4.php",
                            type: "POST",
                            data: {search4: search4},
                            success: function(response) {
                            $('#result4').html(response);
                            }
                        });
                        }
                        else {
                        $('#result4').html("");
                        }
                    });
                    $(document).on('click', '#d4', function() {
                        var name = $(this).text();
                        $('#search4').val(name);
                        $('#result4').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate4').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity4').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name4').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search5').keyup(function() {
                        var search5 = $(this).val();
                        if(search5 != "") {
                        $.ajax({
                            url: "fetchstockname5.php",
                            type: "POST",
                            data: {search5: search5},
                            success: function(response) {
                            $('#result5').html(response);
                            }
                        });
                        }
                        else {
                        $('#result5').html("");
                        }
                    });
                    $(document).on('click', '#d5', function() {
                        var name = $(this).text();
                        $('#search5').val(name);
                        $('#result5').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate5').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity5').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name5').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search6').keyup(function() {
                        var search6 = $(this).val();
                        if(search6 != "") {
                        $.ajax({
                            url: "fetchstockname6.php",
                            type: "POST",
                            data: {search6: search6},
                            success: function(response) {
                            $('#result6').html(response);
                            }
                        });
                        }
                        else {
                        $('#result6').html("");
                        }
                    });
                    $(document).on('click', '#d6', function() {
                        var name = $(this).text();
                        $('#search6').val(name);
                        $('#result6').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate6').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity6').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name6').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search7').keyup(function() {
                        var search7 = $(this).val();
                        if(search7 != "") {
                        $.ajax({
                            url: "fetchstockname7.php",
                            type: "POST",
                            data: {search7: search7},
                            success: function(response) {
                            $('#result7').html(response);
                            }
                        });
                        }
                        else {
                        $('#result7').html("");
                        }
                    });
                    $(document).on('click', '#d7', function() {
                        var name = $(this).text();
                        $('#search7').val(name);
                        $('#result7').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate7').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity7').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name7').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search8').keyup(function() {
                        var search8 = $(this).val();
                        if(search8 != "") {
                        $.ajax({
                            url: "fetchstockname8.php",
                            type: "POST",
                            data: {search8: search8},
                            success: function(response) {
                            $('#result8').html(response);
                            }
                        });
                        }
                        else {
                        $('#result8').html("");
                        }
                    });
                    $(document).on('click', '#d8', function() {
                        var name = $(this).text();
                        $('#search8').val(name);
                        $('#result8').html("");
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate8').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity8').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name8').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#search9').keyup(function() {
                        var search9 = $(this).val();
                        if(search9 != "") {
                        $.ajax({
                            url: "fetchstockname9.php",
                            type: "POST",
                            data: {search9: search9},
                            success: function(response) {
                                $('#result9').fadeIn();
                                $('#result9').html(response);
                            }
                        });
                        }
                    });
                    $(document).on('click', '#d9', function() {
                        var name = $(this).text();
                        $('#search9').val(name);
                        $('#result9').fadeOut();
                        $.ajax({
                        url: "fetchstockrate.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#Rate9').val(response);
                        }
                        });
                        $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#tquantity9').val(response);
                        }
                        });
                        $.ajax({
                            url: "g_name.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#g_name9').val(response);
                            }
                        });
                        $.ajax({
                            url: "fetchSalesRate.php",
                            type: "POST",
                            data: {name: name},
                            success: function(response) {
                                $('#salesRate').val(response);
                            }
                        });
                    });

                    $('#searchSupplier').keyup(function() {
                        var searchsupplier = $(this).val();
                        if (searchsupplier !== "") {
                            $.ajax({
                                url: 'fetchsuppliername.php',
                                type: 'POST',
                                data: {searchSupplier: searchsupplier},
                                success: function(response) {
                                    $('#supplierresult').fadeIn();
                                    $('#supplierresult').html(response);
                                }
                            });
                        }
                    });
                    $(document).on('click', '.sname', function() {
                        var name = $(this).text();
                        $('#searchSupplier').val(name);
                        $('#supplierresult').fadeOut();
                        $.ajax({
                            url: 'fetchsupplierDebit.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#supplierDebit').val(response);
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
                        var name = $('#search').val();
                        var Quantity = $('#quantity').val();
                        var tQuantity = $('#tquantity').val();
                        var Rate = $('#Rate').val();
                        var salesRate = $('#salesRate').val();
                        var value = $('#value').val();
                        var Discount = $('#Discount').val();
                        var perdiscount = $('#perdiscount').val();
                        var Total = $('#Total').val();
                        var Billing = $('#Billing').val();
                        var g_name = $('#g_name').val();

                        var name1 = $('#search1').val();
                        var Quantity1 = $('#quantity1').val();
                        var Rate1 = $('#Rate1').val();
                        var salesRate1 = $('#salesRate1').val();
                        var value1 = $('#value1').val();
                        var Discount1 = $('#Discount1').val();
                        var perdiscount1 = $('#perdiscount1').val();
                        var Total1 = $('#Total1').val();
                        var Billing1 = $('#Billing1').val();
                        var g_name1 = $('#g_name1').val();

                        var name2 = $('#search2').val();
                        var Quantity2 = $('#quantity2').val();
                        var Rate2 = $('#Rate2').val();
                        var salesRate2 = $('#salesRate2').val();
                        var value2 = $('#value2').val();
                        var Discount2 = $('#Discount2').val();
                        var perdiscount2 = $('#perdiscount2').val();
                        var Total2 = $('#Total2').val();
                        var Billing2 = $('#Billing2').val();
                        var g_name2 = $('#g_name2').val();

                        var name3 = $('#search3').val();
                        var Quantity3 = $('#quantity3').val();
                        var Rate3 = $('#Rate3').val();
                        var salesRate3 = $('#salesRate3').val();
                        var value3 = $('#value3').val();
                        var Discount3 = $('#Discount3').val();
                        var perdiscount3 = $('#perdiscount3').val();
                        var Total3 = $('#Total3').val();
                        var Billing3 = $('#Billing3').val();
                        var g_name3 = $('#g_name3').val();
                        
                        var name4 = $('#search4').val();
                        var Quantity4 = $('#quantity4').val();
                        var Rate4 = $('#Rate4').val();
                        var salesRate4 = $('#salesRate4').val();
                        var value4 = $('#value4').val();
                        var Discount4 = $('#Discount4').val();
                        var perdiscount4 = $('#perdiscount4').val();
                        var Billing4 = $('#Billing4').val();
                        var Total4 = $('#Total4').val();
                        var g_name4 = $('#g_name4').val();
                        
                        var name5 = $('#search5').val();
                        var Quantity5 = $('#quantity5').val();
                        var Rate5 = $('#Rate5').val();
                        var salesRate5 = $('#salesRate5').val();
                        var value5 = $('#value5').val();
                        var Discount5 = $('#Discount5').val();
                        var perdiscount5 = $('#perdiscount5').val();
                        var Total5 = $('#Total5').val();
                        var Billing5 = $('#Billing5').val();
                        var g_name5 = $('#g_name5').val();
                        
                        var name6 = $('#search6').val();
                        var Quantity6 = $('#quantity6').val();
                        var Rate6 = $('#Rate6').val();
                        var salesRate6 = $('#salesRate6').val();
                        var value6 = $('#value6').val();
                        var Discount6 = $('#Discount6').val();
                        var perdiscount6 = $('#perdiscount6').val();
                        var Total6 = $('#Total6').val();
                        var Billing6 = $('#Billing6').val();
                        var g_name6 = $('#g_name6').val();
                        
                        var name7 = $('#search7').val();
                        var Quantity7 = $('#quantity7').val();
                        var Rate7 = $('#Rate7').val();
                        var salesRate7 = $('#salesRate7').val();
                        var value7 = $('#value7').val();
                        var Discount7 = $('#Discount7').val();
                        var perdiscount7 = $('#perdiscount7').val();
                        var Total7 = $('#Total7').val();
                        var Billing7 = $('#Billing7').val();
                        var g_name7 = $('#g_name7').val();
                        
                        var name8 = $('#search8').val();
                        var Quantity8 = $('#quantity8').val();
                        var Rate8 = $('#Rate8').val();
                        var salesRate8 = $('#salesRate8').val();
                        var value8 = $('#value8').val();
                        var Discount8 = $('#Discount8').val();
                        var perdiscount8 = $('#perdiscount8').val();
                        var Total8 = $('#Total8').val();
                        var Billing8 = $('#Billing8').val();
                        var g_name8 = $('#g_name8').val();

                        var name9 = $('#search9').val();
                        var Quantity9 = $('#quantity9').val();
                        var Rate9 = $('#Rate9').val();
                        var salesRate9 = $('#salesRate9').val();
                        var value9 = $('#value9').val();
                        var Discount9 = $('#Discount9').val();
                        var perdiscount9 = $('#perdiscount9').val();
                        var Total9 = $('#Total9').val();
                        var Billing9 = $('#Billing9').val();
                        var g_name9 = $('#g_name9').val();

                        var searchSupplier = $('#searchSupplier').val();
                        var supplierDebit = $('#supplierDebit').val();
                        var supplierBill = $('#supplierBill').val();
                        var newDebit = $('#newDebit').val();
                        var address =$('#address').val();
                        var phone =$('#phone').val();
                        var cnic =$('#cnic').val();
                        var ntn =$('#ntn').val();
                        var shopName =$('#shopName').val();
                        var city =$('#city').val();
                        var vehicalNumber = $('#vehicalNumber').val();
                        var invoice = $('#invoice').val();
                    $.ajax({
                        url: "insertstock.php",
                        method: "POST",
                        data: { name:name, Quantity:Quantity, Rate:Rate, salesRate:salesRate, value:value, Discount:Discount, perdiscount:perdiscount, Total:Total, Billing:Billing, g_name:g_name,
                                name1:name1, Quantity1:Quantity1, Rate1:Rate1, salesRate1 : salesRate1, value1:value1, Discount1:Discount1, perdiscount1:perdiscount1, Total1:Total1, Billing1:Billing1, g_name1:g_name1,
                                name2:name2, Quantity2:Quantity2, Rate2:Rate2, salesRate2 : salesRate2, value2:value2, Discount2:Discount2, perdiscount2:perdiscount2, Total2:Total2, Billing2:Billing2, g_name2:g_name2,
                                name3:name3, Quantity3:Quantity3, Rate3:Rate3, salesRate3 : salesRate3, value3:value3, Discount3:Discount3, perdiscount3:perdiscount3, Total3:Total3, Billing3:Billing3, g_name3:g_name3,
                                name4:name4, Quantity4:Quantity4, Rate4:Rate4, salesRate4 : salesRate4, value4:value4, Discount4:Discount4, perdiscount4:perdiscount4, Total4:Total4, Billing4:Billing4, g_name4:g_name4,
                                name5:name5, Quantity5:Quantity5, Rate5:Rate5, salesRate5 : salesRate5, value5:value5, Discount5:Discount5, perdiscount5:perdiscount5, Total5:Total5, Billing5:Billing5, g_name5:g_name5,
                                name6:name6, Quantity6:Quantity6, Rate6:Rate6, salesRate6 : salesRate6, value6:value6, Discount6:Discount6, perdiscount6:perdiscount6, Total6:Total6, Billing6:Billing6, g_name6:g_name6,
                                name7:name7, Quantity7:Quantity7, Rate7:Rate7, salesRate7 : salesRate7, value7:value7, Discount7:Discount7, perdiscount7:perdiscount7, Total7:Total7, Billing7:Billing7, g_name7:g_name7,
                                name8:name8, Quantity8:Quantity8, Rate8:Rate8, salesRate8 : salesRate8, value8:value8, Discount8:Discount8, perdiscount8:perdiscount8, Total8:Total8, Billing8:Billing8, g_name8:g_name8,
                                name9:name9, Quantity9:Quantity9, Rate9:Rate9, salesRate9 : salesRate9, value9:value9, Discount9:Discount9, perdiscount9:perdiscount9, Total9:Total9, Billing9:Billing9, g_name9:g_name9,
                                searchSupplier:searchSupplier, supplierDebit:supplierDebit,newDebit:newDebit,address:address,phone:phone,cnic:cnic,ntn:ntn,shopName:shopName,city:city,
                                vehicalNumber:vehicalNumber,supplierBill:supplierBill,invoice:invoice},
                            success: function(data) {
                        alert(data);
                        $('#search').val('');
                        $('#tquantity').val('');
                        $('#quantity').val('');
                        $('#Rate').val('');
                        $('#salesRate').val('');
                        $('#Discount').val('');
                        $('#perdiscount').val('');
                        $('#value').val('');
                        $('#Billing').val(0);
                        $('#Total').val('');
                        $('#g_name').val('');

                        $('#search1').val('');
                        $('#tquantity1').val('');
                        $('#quantity1').val('');
                        $('#Rate1').val('');
                        $('#salesRate1').val('');
                        $('#Discount1').val('');
                        $('#perdiscount1').val('');
                        $('#value1').val('');
                        $('#Billing1').val(0);
                        $('#Total1').val('');
                        $('#g_name1').val('');

                        $('#search2').val('');
                        $('#tquantity2').val('');
                        $('#quantity2').val('');
                        $('#Rate2').val('');
                        $('#salesRate2').val('');
                        $('#Discount2').val('');
                        $('#perdiscount2').val('');
                        $('#value2').val('');
                        $('#Billing2').val(0);
                        $('#Total2').val('');
                        $('#g_name2').val('');

                        $('#search3').val('');
                        $('#tquantity3').val('');
                        $('#quantity3').val('');
                        $('#Rate3').val('');
                        $('#salesRate3').val('');
                        $('#Discount3').val('');
                        $('#perdiscount3').val('');
                        $('#value3').val('');
                        $('#Billing3').val(0);
                        $('#Total3').val('');
                        $('#g_name3').val('');
                        
                        $('#search4').val('');
                        $('#tquantity4').val('');
                        $('#quantity4').val('');
                        $('#Rate4').val('');
                        $('#salesRate4').val('');
                        $('#Discount4').val('');
                        $('#perdiscount4').val('');
                        $('#value4').val('');
                        $('#Billing4').val(0);
                        $('#Total4').val('');
                        $('#g_name4').val('');
                        
                        $('#search5').val('');
                        $('#tquantity5').val('');
                        $('#quantity5').val('');
                        $('#Rate5').val('');
                        $('#salesRate5').val('');
                        $('#Discount5').val('');
                        $('#perdiscount5').val('');
                        $('#value5').val('');
                        $('#Billing5').val(0);
                        $('#Total5').val('');
                        $('#g_name5').val('');
                        
                        $('#search6').val('');
                        $('#tquantity6').val('');
                        $('#quantity6').val('');
                        $('#Rate6').val('');
                        $('#salesRate6').val('');
                        $('#Discount6').val('');
                        $('#perdiscount6').val('');
                        $('#value6').val('');
                        $('#Billing6').val(0);
                        $('#Total6').val('');
                        $('#g_name6').val('');
                        
                        $('#search7').val('');
                        $('#tquantity7').val('');
                        $('#quantity7').val('');
                        $('#Rate7').val('');
                        $('#salesRate7').val('');
                        $('#Discount7').val('');
                        $('#perdiscount7').val('');
                        $('#value7').val('');
                        $('#Billing7').val(0);
                        $('#Total7').val('');
                        $('#g_name7').val('');
                        
                        $('#search8').val('');
                        $('#tquantity8').val('');
                        $('#quantity8').val('');
                        $('#Rate8').val('');
                        $('#salesRate8').val('');
                        $('#Discount8').val('');
                        $('#perdiscount8').val('');
                        $('#value8').val('');
                        $('#Billing8').val(0);
                        $('#Total8').val('');
                        $('#g_name8').val('');

                        $('#search9').val('');
                        $('#tquantity9').val('');
                        $('#quantity9').val('');
                        $('#Rate9').val('');
                        $('#salesRate9').val('');
                        $('#Discount9').val('');
                        $('#perdiscount9').val('');
                        $('#value9').val('');
                        $('#Billing9').val(0);
                        $('#Total9').val('');
                        $('#g_name9').val('');

                        $('#searchSupplier').val('');
                        $('#supplierDebit').val('');
                        $('#supplierBill').val('');
                        $('#vehicalNumber').val('');
                        $('#newDebit').val('');
                        $('#address').val('');
                        $('#phone').val('');
                        $('#cnic').val('');
                        $('#ntn').val('');
                        $('#shopName').val('');
                        $('#city').val('');
                        }
                    });
                });
            });
   </script>
</head>

<body> 
    <h1>Stock Receiving</h1>
<div class="top">
        <div class="top-inputs" >
               <input style="width: 97%;" type="text" placeholder="Search Supplier" id="searchSupplier" name="searchSupplier">
               <div class="results" style="width:max-content" id="supplierresult"></div>
               <input type="text" id="supplierDebit" name="supplierDebit" placeholder="Previous Debit">
               <input type="text" id="supplierBill" name="supplierBill" placeholder="Supplier Bill"> 
               <input type="text " id="newDebit" name="newDebit" placeholder="New Debit">
               <input type="text" id="address" name="address" placeholder="Address">
               <input type="number" id="phone" name="phone" placeholder="Phone">
            </div>

            <div class="top-inputs" >    
            <input type="number" id="cnic" name="cnic" placeholder="CNIC">
            <input type="number" id="ntn" name="ntn" placeholder="NTN">
            <input type="text" id="shopName" name="shopName" placeholder="Shop Name">
            <input type="text" id="city" name="city" placeholder="City">
            <input type="text" placeholder="Add Vehical Number" id="vehicalNumber" name="vehicalNumber">
               <div id="btndiv">
                   <input type="text" placeholder="Invoice" id="invoice" name="invoice">
                   <button onclick="updateInvoice() ">Update Invoice</button>
                </div>   
            </div>
            </div>
    <br>
        <table>
            <thead>
                <tr>
                <th>Item Name</th>
                <th>Total Quantity</th>
                <th>Quantity</th>
                <th>Purchase Rate</th>
                <th>Without Discount</th>
                <th>Discount /
                    Scheme</th>
                <th>Discount % </th>
                <th>Total Discount</th>
                <th>Billing Price</th>
                <th>Group Name</th>
            </tr>
            </thead>

            <tbody>
            <form id="stockForm" method="post">
            <tr>
                <td>
                    <input type="text" placeholder="Search Item" id="search" name="search">
                    <div class="results" id="result">
        
                    </div>
                        </td>
                        <td><input type="text" name="tQuantity" id="tquantity" readonly></td>
                        <td><input type="text"  oninput="setRate()" name="Quantity" id="quantity"  ></td>
                        <td><input type="text"  name="Rate" id="Rate" readonly></td>
                        <td style="display:none"><input type="text"  name="salesRate" id="salesRate"  readonly></td>
                        <td><input type="text" name="value" id="value"></td> <!-- without discount -->
                        <td><input type="text" oninput="setRate()" name="Discount" id="Discount"></td> <!-- discount/scheme -->
                        <td><input type="text" oninput="setRate()" name="perdiscount" id="perdiscount"></td>
                        <td><input type="text" name="Total" id="Total"></td> <!-- total discount -->
                        <td ><input type="text" name="Billing" value="0" id="Billing"></td>
                        <td ><input type="text"  name="g_name" id="g_name"></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="Search Item" id="search1" name="search1">
                            <div class="results" id="result1"></div>
                                </td>
                                <td><input type="text" name="tQuantity1" id="tquantity1" readonly></td>
                                <td><input type="text"  oninput="setRate1()" name="Quantity1" id="quantity1"  ></td>
                                <td><input type="text"  name="Rate1" id="Rate1" readonly></td>
                                <td style="display:none"><input type="text"  name="salesRate1" id="salesRate1" style="display:none" readonly></td>
                                <td><input type="text" name="value1" id="value1"></td> <!-- without discount -->
                                <td><input type="text" oninput="setRate1()" name="Discount1" id="Discount1"></td> <!-- discount/scheme -->
                                <td><input type="text" oninput="setRate1()" name="perdiscount1" id="perdiscount1"></td>
                                <td><input type="text" name="Total1" id="Total1"></td> <!-- total discount -->
                                <td ><input type="text" value="0"  name="Billing1" id="Billing1"></td>
                                <td ><input type="text"  name="g_name1" id="g_name1"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="Search Item" id="search2" name="search2">
                                    <div class="results" id="result2"></div>
                                        </td>
                                        <td><input type="text" name="tQuantity2" id="tquantity2" readonly ></td>
                                        <td><input type="text"  oninput="setRate2()" name="Quantity2" id="quantity2"  ></td>
                                        <td><input type="text"  name="Rate2" id="Rate2" readonly></td>
                                        <td  style="display:none"><input type="text"  name="salesRate2" id="salesRate2" style="display:none" readonly></td>
                                        <td><input type="text" name="value2" id="value2"></td> <!-- without discount -->
                                        <td><input type="text" oninput="setRate2()" name="Discount2" id="Discount2"></td> <!-- discount/scheme -->
                                        <td><input type="text" oninput="setRate2()" name="perdiscount2" id="perdiscount2"></td>
                                        <td><input type="text" name="Total2" id="Total2"></td> <!-- total discount -->
                                        <td ><input type="text" value="0"  name="Billing2" id="Billing2"></td>
                                        <td ><input type="text"  name="g_name2" id="g_name2"></td>
                                    </tr>
                       <tr>
                           <td>
                               <input type="text" placeholder="Search Item" id="search3" name="search3">
                               <div class="results" id="result3"></div>
                                   </td>
                                   <td><input type="text" name="tQuantity3" id="tquantity3" readonly ></td>
                                   <td><input type="text"  oninput="setRate3()" name="Quantity3" id="quantity3"  ></td>
                                   <td><input type="text"  name="Rate3" id="Rate3" readonly></td>
                                   <td style="display:none"><input type="text"  name="salesRate3" id="salesRate3" style="display:none" readonly></td>
                                   <td><input type="text" name="value3" id="value3"></td> <!-- without discount -->
                                   <td><input type="text" oninput="setRate3()" name="Discount3" id="Discount3"></td> <!-- discount/scheme -->
                                   <td><input type="text" oninput="setRate3()" name="perdiscount3" id="perdiscount3"></td>
                                   <td><input type="text" name="Total3" id="Total3"></td> <!-- total discount -->
                                   <td ><input type="text" value="0"  name="Billing3" id="Billing3"></td>
                                   <td ><input type="text"  name="g_name3" id="g_name3"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <input type="text" placeholder="Search Item" id="search4" name="search4">
                                       <div class="results" id="result4"></div>
                                           </td>
                                           <td><input type="text" name="tQuantity4" id="tquantity4" readonly ></td>
                                           <td><input type="text"  oninput="setRate4()" name="Quantity4" id="quantity4"  ></td>
                                           <td><input type="text"  name="Rate4" id="Rate4" readonly></td>
                                           <td style="display:none"><input type="text"  name="salesRate4" id="salesRate4" style="display:none" readonly></td>
                                           <td><input type="text" name="value4" id="value4"></td> <!-- without discount -->
                                           <td><input type="text" oninput="setRate4()" name="Discount4" id="Discount4"></td> <!-- discount/scheme -->
                      <td><input type="text" oninput="setRate4()" name="perdiscount4" id="perdiscount4"></td>
                                   <td><input type="text" name="Total4" id="Total4"></td> <!-- total discount -->
                                   <td ><input type="text"  value="0" name="Billing4" id="Billing4"></td>
                                   <td ><input type="text"  name="g_name4" id="g_name4"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <input type="text" placeholder="Search Item" id="search5" name="search5">
                                       <div class="results" id="result5"></div>
                                           </td>
                                           <td><input type="text" name="tQuantity5" id="tquantity5" readonly ></td>
                                           <td><input type="text"  oninput="setRate5()" name="Quantity5" id="quantity5"  ></td>
                                           <td><input type="text"  name="Rate5" id="Rate5" readonly></td>
                                           <td style="display:none"><input type="text"  name="salesRate5" id="salesRate5" style="display:none" readonly></td>
                                           <td><input type="text" name="value5" id="value5"></td> <!-- without discount -->
                                           <td><input type="text" oninput="setRate5()" name="Discount5" id="Discount5"></td> <!-- discount/scheme -->
                                           <td><input type="text" oninput="setRate5()" name="perdiscount5" id="perdiscount5"></td>
                                           <td><input type="text" name="Total5" id="Total5"></td> <!-- total discount -->
                                           <td ><input type="text"  value="0" name="Billing5" id="Billing5"></td>
                                           <td ><input type="text"  name="g_name5" id="g_name5"></td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <input type="text" placeholder="Search Item" id="search6" name="search6">
                                               <div class="results" id="result6"></div>
                                                   </td>
                                                   <td><input type="text" name="tQuantity6" id="tquantity6" readonly ></td>
                                    <td><input type="text"  oninput="setRate6()" name="Quantity6" id="quantity6"  ></td>
                                    <td><input type="text"  name="Rate6" id="Rate6" readonly></td>
                                    <td style="display:none"><input type="text"  name="salesRate6" id="salesRate6" style="display:none" readonly></td>
                                    <td><input type="text" name="value6" id="value6"></td> <!-- without discount -->
                                    <td><input type="text" oninput="setRate6()" name="Discount6" id="Discount6"></td> <!-- discount/scheme -->
                                    <td><input type="text" oninput="setRate6()" name="perdiscount6" id="perdiscount6"></td>
                                    <td><input type="text" name="Total6" id="Total6"></td> <!-- total discount -->
                                    <td ><input type="text"  value="0" name="Billing6" id="Billing6"></td>
                                    <td ><input type="text"  name="g_name6" id="g_name6"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" placeholder="Search Item" id="search7" name="search7">
                                        <div class="results" id="result7"></div>
                                            </td>
                                            <td><input type="text" name="tQuantity7" id="tquantity7" readonly ></td>
                                            <td><input type="text"  oninput="setRate7()" name="Quantity7" id="quantity7"  ></td>
                                            <td><input type="text"  name="Rate7" id="Rate7" readonly></td>
                                            <td style="display:none"><input type="text"  name="salesRate7" id="salesRate7" style="display:none" readonly></td>
                                            <td><input type="text" name="value7" id="value7"></td> <!-- without discount -->
                                            <td><input type="text" oninput="setRate7()" name="Discount7" id="Discount7"></td> <!-- discount/scheme -->
                                            <td><input type="text" oninput="setRate7()" name="perdiscount7" id="perdiscount7"></td>
                                            <td><input type="text" name="Total7" id="Total7"></td> <!-- total discount -->
                                            <td ><input type="text"  value="0" name="Billing7" id="Billing7"></td>
                                            <td ><input type="text"  name="g_name7" id="g_name7"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Search Item" id="search8" name="search8">
                                <div class="results" id="result8"></div>
                                    </td>
                                   <td><input type="text" name="tQuantity8" id="tquantity8" readonly ></td>
                                   <td><input type="text"  oninput="setRate8()" name="Quantity8" id="quantity8"  ></td>
                                   <td><input type="text"  name="Rate8" id="Rate8" readonly></td>
                                   <td style="display:none"><input type="text"  name="salesRate8" id="salesRate8" style="display:none" readonly></td>
                                   <td><input type="text" name="value8" id="value8"></td> <!-- without discount -->
                                   <td><input type="text" oninput="setRate8()" name="Discount8" id="Discount8"></td> <!-- discount/scheme -->
                                   <td><input type="text" oninput="setRate8()" name="perdiscount8" id="perdiscount8"></td>
                                   <td><input type="text" name="Total8" id="Total8"></td> <!-- total discount -->
                                   <td ><input type="text"  value="0" name="Billing8" id="Billing8"></td>
                                   <td ><input type="text"  name="g_name8" id="g_name8"></td>
                               </tr>
                               <td>
                               <input type="text" placeholder="Search Item" id="search9" name="search9">
                               <div class="results" id="result9"></div>
                                   </td>
                                   <td><input type="text" name="tQuantity9" id="tquantity9" readonly ></td>
                                   <td><input type="text"  oninput="setRate9()" name="Quantity9" id="quantity9"  ></td>
                                   <td><input type="text"  name="Rate9" id="Rate9" readonly></td>
                                   <td style="display:none"><input type="text"  name="salesRate9" id="salesRate9" style="display:none" readonly></td>
                                   <td><input type="text" name="value9" id="value9"></td> <!-- without discount -->
                                   <td><input type="text" oninput="setRate9()" name="Discount9" id="Discount9"></td> <!-- discount/scheme -->
                                   <td><input type="text" oninput="setRate9()" name="perdiscount9" id="perdiscount9"></td>
                                   <td><input type="text" name="Total9" id="Total9"></td> <!-- total discount -->
                                   <td ><input type="text"  value="0" name="Billing9" id="Billing9"></td>
                                   <td ><input type="text"  name="g_name9" id="g_name9"></td>
                                </tr>
            </form>

            </table>
            <div id="bottomFields" >
                <h3> Grand Total: </h3>
                <input placeholder="Grand Total" id="gTotal" type="number" >
            </div>
        <div id="bottom">
             <button type="button" name="insert" id="insert" value="Insert"> Insert </button> </tr>
             <a href="readstockreciving.php"><button type="button" name="insert" id="insert" value="Insert" > Read </button></a> </tr>
            </div>
</div>
</body>
</html>


<style>
    body
{
    margin: 0;
    padding: 2%;
    background-color: #444444;
    overflow-x: hidden;
    overflow-y: scroll;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 99vh;
    gap: 7px;
}

#stockForm{

    width: 98%;
    margin-top: 5%;
    margin-bottom: 5%;
}

#d{


}
.results {
    background-color: #e4e4e4;
    width: inherit;
    overflow-y: scroll;
    max-height: 100px;
    position: fixed;
    z-index: 10;
    }
.results >li {
    border-bottom: 1px solid black;
    list-style-type: none;
    width: 120px;
    padding: 3px;
    overflow: hidden;
    position: relative;
    z-index: 11;
}
.results >li:hover{
    cursor: pointer;
    background-color: #b9b9b9;
}
    ::-webkit-scrollbar {
        width: 0px;
}
td>input{
    width: 90%;
    margin: 0px;
    outline:invert;
}

#invoice{
    border-radius: 10px;
}
#searchSupplier{
    width:35% ;
    border-radius: 25px;
    padding-left: 2%;
    color: black;
    outline: invert;
}
#btndiv{
    width: 99%;
    display: flex;
    right: 0px;
    justify-content: space-between;
}
#btndiv>input{
    width: 80%;

}
 button{
    width: 150px;
    padding: 5px;
    font-size: large;
    border-radius: 30px;
    text-decoration: none;
    background-color: rgb(230, 172, 172);
    transition: all 0.3s;
    border: none;
}
button:hover{
    cursor: pointer;
    box-shadow: rgb(13, 13, 13) 2px 2px 2px 2px;
    transition: all 0.3s;
}
a{
    text-decoration: none;
    color: #000;
}

#bottomFields{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
    width: 95.4vw;
    height: 30px;
    background-color: aliceblue;
    margin-top: -7px;
}
#bottomFields> input{
    height: 20px;

}
#bottom{
    width: 100%;
    margin-top: 5px;
    display: flex;
    flex-direction: row;
   justify-content: flex-end;
   gap: 20px;
}
#bottom> button {
    width: 150px;

}

.top-inputs{
display: flex;
flex-direction: column;
width: 100%;
}

.top{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 100%;
    /* gap: 5px; */
}

.top>input{
    padding: 5px;
    border-radius: 10px;
    width: 90%;
}
.top>div>input{
    padding: 5px;
    border-radius: 10px;

}
table{
    width: 96vw;
}

   table, th, td{
    border: 2px solid black;
    border-collapse: collapse;
   }

   th {
  background-color: rgb(252, 99, 99);
}
   td {
    padding: 1%;
  background-color: rgb(249, 187, 187);

  
}
    .drop-down
    {
        position: relative;
    }

h1{
    color: white;
    font-size: 2.5rem;
}


#clientresult{
    padding-right: 2%;
    width: 100%;
    height: 100%;
    border-right: 3px  solid rgb(0, 0, 0);
    
}


</style>


<script>

function newCredit() {
    let CurrentDebit = document.getElementById('supplierDebit').value;
    let CurrentBill = document.getElementById('supplierBill').value;
    // document.getElementById('newCredit').value = CurrentCredit - CurrentBill;
}
      
      
        function setRate(){

const quantity = document.getElementById("quantity").value;
const rate = document.getElementById("Rate").value;
const discount = document.getElementById("Discount").value;
const  pDis = document.getElementById("perdiscount").value;

const tDiscount = discount * quantity;
const val = ( quantity * rate ) ;
const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

document.getElementById("value").value = val.toFixed(3)
document.getElementById("Billing").value = bPrice.toFixed(3) ;
document.getElementById("Total").value = tDiscount.toFixed(3) ;
gTotal()
newCredit()
}

function setRate1(){

const quantity = document.getElementById("quantity1").value;
const rate = document.getElementById("Rate1").value;
const discount = document.getElementById("Discount1").value;
const  pDis = document.getElementById("perdiscount1").value;

const tDiscount = discount * quantity;
const val = ( quantity * rate ) ;
const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

document.getElementById("value1").value = val.toFixed(3)
document.getElementById("Billing1").value = bPrice.toFixed(3) ;
document.getElementById("Total1").value = tDiscount.toFixed(3) ;
gTotal()
}

function setRate2(){

    const quantity = document.getElementById("quantity2").value;
    const rate = document.getElementById("Rate2").value;
    const discount = document.getElementById("Discount2").value;
    const  pDis = document.getElementById("perdiscount2").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value2").value = val.toFixed(3)
    document.getElementById("Billing2").value = bPrice.toFixed(3) ;
    document.getElementById("Total2").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate3(){

    const quantity = document.getElementById("quantity3").value;
    const rate = document.getElementById("Rate3").value;
    const discount = document.getElementById("Discount3").value;
    const  pDis = document.getElementById("perdiscount3").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value3").value = val.toFixed(3)
    document.getElementById("Billing3").value = bPrice.toFixed(3) ;
    document.getElementById("Total3").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate4(){

    const quantity = document.getElementById("quantity4").value;
    const rate = document.getElementById("Rate4").value;
    const discount = document.getElementById("Discount4").value;
    const  pDis = document.getElementById("perdiscount4").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value4").value = val.toFixed(3)
    document.getElementById("Billing4").value = bPrice.toFixed(3) ;
    document.getElementById("Total4").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate5(){

    const quantity = document.getElementById("quantity5").value;
    const rate = document.getElementById("Rate5").value;
    const discount = document.getElementById("Discount5").value;
    const  pDis = document.getElementById("perdiscount5").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value5").value = val.toFixed(3)
    document.getElementById("Billing5").value = bPrice.toFixed(3) ;
    document.getElementById("Total5").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate6(){

    const quantity = document.getElementById("quantity6").value;
    const rate = document.getElementById("Rate6").value;
    const discount = document.getElementById("Discount6").value;
    const  pDis = document.getElementById("perdiscount6").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value6").value = val.toFixed(3)
    document.getElementById("Billing6").value = bPrice.toFixed(3) ;
    document.getElementById("Total6").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate7(){

    const quantity = document.getElementById("quantity7").value;
    const rate = document.getElementById("Rate7").value;
    const discount = document.getElementById("Discount7").value;
    const  pDis = document.getElementById("perdiscount7").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value7").value = val.toFixed(3)
    document.getElementById("Billing7").value = bPrice.toFixed(3) ;
    document.getElementById("Total7").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate8(){

    const quantity = document.getElementById("quantity8").value;
    const rate = document.getElementById("Rate8").value;
    const discount = document.getElementById("Discount8").value;
    const  pDis = document.getElementById("perdiscount8").value;

    const tDiscount = discount * quantity;
    const val = ( quantity * rate ) ;
    const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
    const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

    document.getElementById("value8").value = val.toFixed(3)
    document.getElementById("Billing8").value = bPrice.toFixed(3) ;
    document.getElementById("Total8").value = tDiscount.toFixed(3) ;
    gTotal()
}

function setRate9(){

const quantity = document.getElementById("quantity9").value;
const rate = document.getElementById("Rate9").value;
const discount = document.getElementById("Discount9").value;
const  pDis = document.getElementById("perdiscount9").value;

const tDiscount = discount * quantity;
const val = ( quantity * rate ) ;
const pDisc = ( (((quantity * rate) - discount) * pDis )/ 100 ) 
const bPrice = ( ((quantity * rate) - tDiscount) -pDisc ) ;

document.getElementById("value9").value = val.toFixed(3)
document.getElementById("Billing9").value = bPrice.toFixed(3) ;
document.getElementById("Total9").value = tDiscount.toFixed(3) ;
gTotal()
}

function gTotal(){
            var B1 = document.getElementById("Billing").value;
            var B2 = document.getElementById("Billing1").value;
            var B3 = document.getElementById("Billing2").value;
            var B4 = document.getElementById("Billing3").value;
            var B5 = document.getElementById("Billing4").value;
            var B6 = document.getElementById("Billing5").value;
            var B7 = document.getElementById("Billing6").value;
            var B8 = document.getElementById("Billing7").value;
            var B9 = document.getElementById("Billing8").value;
            var B10 = document.getElementById("Billing9").value;

            var b1 = parseInt(B1)
            var b2 = parseInt(B2)
            var b3 = parseInt(B3)
            var b4 = parseInt(B4)
            var b5 = parseInt(B5)
            var b6 = parseInt(B6)
            var b7 = parseInt(B7)
            var b8 = parseInt(B8)
            var b9 = parseInt(B9)
            var b10 = parseInt(B10)

            var gTotal = b1 + b2 + b3 + b4 + b5 + b6 + b7 + b8 + b9 + b10; 
            document.getElementById('gTotal').value = gTotal;
            document.getElementById('supplierBill').value = gTotal;
            let debit = document.getElementById('supplierDebit');
            let suppbill = document.getElementById('supplierBill');
            document.getElementById('newDebit').value = debit - suppbill;
            
            
            
            console.log( 'total = ' + gTotal)


        }

    </script>