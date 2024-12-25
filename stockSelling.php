<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Selling</title>
    <link rel="stylesheet" href="stockreceiving.css" >
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
            function updateInvoice() {
                $.ajax({
                    url: 'fetchstocksellinginvoice.php', 
                    method: 'GET',
                    success: function(data) {
                        var newInvoice = parseInt(data) + 1;
                        $('#invoice').val(newInvoice);
                    },
                        error: function(error) {
                        console.error('Error fetching max invoice:', error);
                    }
                });
                }
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
                    $(document).on('click', '#d', function() {
                        var name = $(this).text();
                        $('#search').val(name);
                        $('#result').fadeOut();
                        $.ajax({
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity1').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity2').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity3').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity4').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity5').val(response);
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
                    $.ajax({
                        url: "fetchstockquantity.php",
                        type: "POST",
                        data: {name: name},
                        success: function(response) {
                            $('#quantity6').val(response);
                        }
                        });
                    $(document).on('click', '#d6', function() {
                        var name = $(this).text();
                        $('#search6').val(name);
                        $('#result6').html("");
                        $.ajax({
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity6').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity7').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity8').val(response);
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
                        url: "fetchstocksaleprice.php",
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
                            $('#quantity9').val(response);
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
                    });

                    $('#searchClient').keyup(function() {
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
                    $(document).on('click', '.cname', function() {
                        var name = $(this).text();
                        $('#searchClient').val(name);
                        $('#clientresult').fadeOut();
                        $.ajax({
                            url: 'fetchclientcredit.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#clientCredit').val(response);
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
                            url: 'fetchClientCity.php',
                            type: 'POST',
                            data: {name: name},
                            success: function(response) {
                                $('#city').val(response);
                            }
                        });
                    });

                    
                    $('#insert').click(function() {
                        var name = $('#search').val();
                        var sQuantity = $('#squantity').val();
                        var Quantity = $('#quantity').val();
                        var Rate = $('#Rate').val();
                        var value = $('#value').val();
                        var Discount = $('#Discount').val();
                        var perdiscount = $('#perdiscount').val();
                        var Total = $('#Total').val();
                        var Billing = $('#Billing').val();
                        var g_name = $('#g_name').val();

                        var name1 = $('#search1').val();
                        var sQuantity1 = $('#squantity1').val();
                        var Quantity1 = $('#quantity1').val();
                        var Rate1 = $('#Rate1').val();
                        var value1 = $('#value1').val();
                        var Discount1 = $('#Discount1').val();
                        var perdiscount1 = $('#perdiscount1').val();
                        var Total1 = $('#Total1').val();
                        var Billing1 = $('#Billing1').val();
                        var g_name1 = $('#g_name1').val();

                        var name2 = $('#search2').val();
                        var sQuantity2 = $('#squantity2').val();
                        var Quantity2 = $('#quantity2').val();
                        var Rate2 = $('#Rate2').val();
                        var value2 = $('#value2').val();
                        var Discount2 = $('#Discount2').val();
                        var perdiscount2 = $('#perdiscount2').val();
                        var Total2 = $('#Total2').val();
                        var Billing2 = $('#Billing2').val();
                        var g_name2 = $('#g_name2').val();

                        var name3 = $('#search3').val();
                        var sQuantity3 = $('#squantity3').val();
                        var Quantity3 = $('#quantity3').val();
                        var Rate3 = $('#Rate3').val();
                        var value3 = $('#value3').val();
                        var Discount3 = $('#Discount3').val();
                        var perdiscount3 = $('#perdiscount3').val();
                        var Total3 = $('#Total3').val();
                        var Billing3 = $('#Billing3').val();
                        var g_name3 = $('#g_name3').val();
                        
                        var name4 = $('#search4').val();
                        var sQuantity4 = $('#squantity4').val();
                        var Quantity4 = $('#quantity4').val();
                        var Rate4 = $('#Rate4').val();
                        var value4 = $('#value4').val();
                        var Discount4 = $('#Discount4').val();
                        var perdiscount4 = $('#perdiscount4').val();
                        var Billing4 = $('#Billing4').val();
                        var Total4 = $('#Total4').val();
                        var g_name4 = $('#g_name4').val();
                        
                        var name5 = $('#search5').val();
                        var sQuantity5 = $('#squantity5').val();
                        var Quantity5 = $('#quantity5').val();
                        var Rate5 = $('#Rate5').val();
                        var value5 = $('#value5').val();
                        var Discount5 = $('#Discount5').val();
                        var perdiscount5 = $('#perdiscount5').val();
                        var Total5 = $('#Total5').val();
                        var Billing5 = $('#Billing5').val();
                        var g_name5 = $('#g_name5').val();
                        
                        var name6 = $('#search6').val();
                        var sQuantity6 = $('#squantity6').val();
                        var Quantity6 = $('#quantity6').val();
                        var Rate6 = $('#Rate6').val();
                        var value6 = $('#value6').val();
                        var Discount6 = $('#Discount6').val();
                        var perdiscount6 = $('#perdiscount6').val();
                        var Total6 = $('#Total6').val();
                        var Billing6 = $('#Billing6').val();
                        var g_name6 = $('#g_name6').val();
                        
                        var name7 = $('#search7').val();
                        var sQuantity7 = $('#squantity7').val();
                        var Quantity7 = $('#quantity7').val();
                        var Rate7 = $('#Rate7').val();
                        var value7 = $('#value7').val();
                        var Discount7 = $('#Discount7').val();
                        var perdiscount7 = $('#perdiscount7').val();
                        var Total7 = $('#Total7').val();
                        var Billing7 = $('#Billing7').val();
                        var g_name7 = $('#g_name7').val();
                        
                        var name8 = $('#search8').val();
                        var sQuantity8 = $('#squantity8').val();
                        var Quantity8 = $('#quantity8').val();
                        var Rate8 = $('#Rate8').val();
                        var value8 = $('#value8').val();
                        var Discount8 = $('#Discount8').val();
                        var perdiscount8 = $('#perdiscount8').val();
                        var Total8 = $('#Total8').val();
                        var Billing8 = $('#Billing8').val();
                        var g_name8 = $('#g_name8').val();
                        
                        var name9 = $('#search9').val();
                        var sQuantity9 = $('#squantity9').val();
                        var Quantity9 = $('#quantity9').val();
                        var Rate9 = $('#Rate9').val();
                        var value9 = $('#value9').val();
                        var Discount9 = $('#Discount9').val();
                        var perdiscount9 = $('#perdiscount9').val();
                        var Total9 = $('#Total9').val();
                        var Billing9 = $('#Billing9').val();
                        var g_name9 = $('#g_name9').val();

                        var searchClient = $('#searchClient').val();
                        var clientCredit = $('#clientCredit').val();
                        var vehicalNumber = $('#vehicalNumber').val();
                        var clientBill = $('#clientBill').val();
                        var newCredit =$('#newCredit').val();
                        var address =$('#address').val();
                        var phone =$('#phone').val();
                        var cnic =$('#cnic').val();
                        var ntn =$('#ntn').val();
                        var shopName =$('#shopName').val();
                        var city =$('#city').val();
                        var invoice = $('#invoice').val();


                    $.ajax({
                        url: "insertstockselling.php",
                        method: "POST",
                        data: { name:name, sQuantity:sQuantity, Rate:Rate, value:value, Discount:Discount, perdiscount:perdiscount, Total:Total, Billing:Billing, g_name:g_name,
                                name1:name1, sQuantity1:sQuantity1, Rate1:Rate1, value1:value1, Discount1:Discount1, perdiscount1:perdiscount1, Total1:Total1, Billing1:Billing1, g_name1:g_name1,
                                name2:name2, sQuantity2:sQuantity2, Rate2:Rate2, value2:value2, Discount2:Discount2, perdiscount2:perdiscount2, Total2:Total2, Billing2:Billing2, g_name2:g_name2,
                                name3:name3, sQuantity3:sQuantity3, Rate3:Rate3, value3:value3, Discount3:Discount3, perdiscount3:perdiscount3, Total3:Total3, Billing3:Billing3, g_name3:g_name3,
                                name4:name4, sQuantity4:sQuantity4, Rate4:Rate4, value4:value4, Discount4:Discount4, perdiscount4:perdiscount4, Total4:Total4, Billing4:Billing4, g_name4:g_name4,
                                name5:name5, sQuantity5:sQuantity5, Rate5:Rate5, value5:value5, Discount5:Discount5, perdiscount5:perdiscount5, Total5:Total5, Billing5:Billing5, g_name5:g_name5,
                                name6:name6, sQuantity6:sQuantity6, Rate6:Rate6, value6:value6, Discount6:Discount6, perdiscount6:perdiscount6, Total6:Total6, Billing6:Billing6, g_name6:g_name6,
                                name7:name7, sQuantity7:sQuantity7, Rate7:Rate7, value7:value7, Discount7:Discount7, perdiscount7:perdiscount7, Total7:Total7, Billing7:Billing7, g_name7:g_name7,
                                name8:name8, sQuantity8:sQuantity8, Rate8:Rate8, value8:value8, Discount8:Discount8, perdiscount8:perdiscount8, Total8:Total8, Billing8:Billing8, g_name8:g_name8,
                                name9:name9, sQuantity9:sQuantity9, Rate9:Rate9, value9:value9, Discount9:Discount9, perdiscount9:perdiscount9, Total9:Total9, Billing9:Billing9, g_name9:g_name9,
                                searchClient: searchClient,clientCredit:clientCredit,newCredit:newCredit,address:address,phone:phone,cnic:cnic,ntn:ntn,shopName:shopName,city:city,
                                vehicalNumber:vehicalNumber,clientBill:clientBill,
                                invoice: invoice},
                            success: function(data) {
                        alert(data);
                        $('#search').val('');
                        $('#quantity').val('');
                        $('#squantity').val('');
                        $('#Rate').val('');
                        $('#Discount').val('0');
                        $('#perdiscount').val('');
                        $('#value').val('');
                        $('#Billing').val('0');
                        $('#Total').val('');
                        $('#g_name').val('');

                        $('#search1').val('');
                        $('#quantity1').val('');
                        $('#squantity1').val('');
                        $('#Rate1').val('');
                        $('#Discount1').val('0');
                        $('#perdiscount1').val('');
                        $('#value1').val('');
                        $('#Billing1').val('0');
                        $('#Total1').val('');
                        $('#g_name1').val('');

                        $('#search2').val('');
                        $('#quantity2').val('');
                        $('#squantity2').val('');
                        $('#Rate2').val('');
                        $('#Discount2').val('0');
                        $('#perdiscount2').val('');
                        $('#value2').val('');
                        $('#Billing2').val('0');
                        $('#Total2').val('');
                        $('#g_name2').val('');

                        $('#search3').val('');
                        $('#quantity3').val('');
                        $('#squantity3').val('');
                        $('#Rate3').val('');
                        $('#Discount3').val('0');
                        $('#perdiscount3').val('');
                        $('#value3').val('');
                        $('#Billing3').val('0');
                        $('#Total3').val('');
                        $('#g_name3').val('');
                        
                        $('#search4').val('');
                        $('#quantity4').val('');
                        $('#squantity4').val('');
                        $('#Rate4').val('');
                        $('#Discount4').val('0');
                        $('#perdiscount4').val('');
                        $('#value4').val('');
                        $('#Billing4').val('0');
                        $('#Total4').val('');
                        $('#g_name4').val('');
                        
                        $('#search5').val('');
                        $('#quantity5').val('');
                        $('#squantity5').val('');
                        $('#Rate5').val('');
                        $('#Discount5').val('0');
                        $('#perdiscount5').val('');
                        $('#value5').val('');
                        $('#Billing5').val('0');
                        $('#Total5').val('');
                        $('#g_name5').val('');
                        
                        $('#search6').val('');
                        $('#quantity6').val('');
                        $('#squantity6').val('');
                        $('#Rate6').val('');
                        $('#Discount6').val('0');
                        $('#perdiscount6').val('');
                        $('#value6').val('');
                        $('#Billing6').val('0');
                        $('#Total6').val('');
                        $('#g_name6').val('');
                        
                        $('#search7').val('');
                        $('#quantity7').val('');
                        $('#squantity7').val('');
                        $('#Rate7').val('');
                        $('#Discount7').val('0');
                        $('#perdiscount7').val('');
                        $('#value7').val('');
                        $('#Billing7').val('0');
                        $('#Total7').val('');
                        $('#g_name7').val('');
                        
                        $('#search8').val('');
                        $('#quantity8').val('');
                        $('#squantity8').val('');
                        $('#Rate8').val('');
                        $('#Discount8').val('0');
                        $('#perdiscount8').val('');
                        $('#value8').val('');
                        $('#Billing8').val('0');
                        $('#Total8').val('');
                        $('#g_name8').val('');

                        $('#search9').val('');
                        $('#quantity9').val('');
                        $('#squantity9').val('');
                        $('#Rate9').val('');
                        $('#Discount9').val('0');
                        $('#perdiscount9').val('');
                        $('#value9').val('');
                        $('#Billing9').val('0');
                        $('#Total9').val('');
                        $('#g_name9').val('');

                        $('#searchClient').val('');
                        $('#clientCredit').val('');
                        $('#clientBill').val('');
                        $('#vehicalNumber').val('');
                        $('#newCredit').val('');
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
    <h2 style="color:white;">
        Stock Selling
        </h2>
    <div>
        <div class="top">
        <div  class="top-inputs">
            <input type="text" placeholder="Search Client" id="searchClient" name="searchClient">
            <div class="results" style="width: max-content; padding: 3px; " id="clientresult"></div>
            <input type="text" id="clientCredit" name="clientCredit" placeholder="Client Credits" >
            <input type="text" id="clientBill" name="clientBill" placeholder="Client Bill" >
            <input type="text" id="newCredit" name="newCredit" placeholder="New Credit">
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
         <button onclick="updateInvoice()">Update Invoice</button>
        </div>
        </div>
        </div>
        <table>`
            <thead>
                <tr>
                <th>Item Name</th>
                <th>Total Stock</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Without Discount</th>
                <th>Discount/Scheme</th>
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
                    <div class="results" id="result"></div>
                        </td>
                        <td><input type="text" id="quantity" name="Quantity" readonly></td>
                        <td><input type="text"  oninput="setRate()" name="sQuantity" id="squantity"  ></td>
                        <td><input type="text"  name="Rate" id="Rate" readonly></td>
                        <td><input type="text" name="value" id="value"></td> <!-- without discount -->
                        <td><input type="text" value="0" oninput="setRate()" name="Discount" id="Discount"></td> <!-- discount/scheme -->
                        <td><input type="text" oninput="setRate()" name="perdiscount" id="perdiscount"></td>
                        <td><input type="text" name="Total" id="Total"></td> <!-- total discount -->
                        <td><input type="number" value="0"  name="Billing" id="Billing"></td>
                        <td><input type="text"  name="g_name" id="g_name"></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="Search Item" id="search1" name="search1">
                            <div class="results" id="result1"></div>
                                </td>
                                <td><input type="text" name="Quantity1" id="quantity1" readonly ></td>
                                <td><input type="text"  oninput="setRate1()" name="sQuantity1" id="squantity1"  ></td>
                                <td><input type="text"  name="Rate1" id="Rate1" readonly></td>
                                <td><input type="text" name="value1" id="value1"></td> <!-- without discount -->
                                <td><input type="text" value="0" oninput="setRate1()" name="Discount1" id="Discount1"></td> <!-- discount/scheme -->
                                <td><input type="text" oninput="setRate1()" name="perdiscount1" id="perdiscount1"></td>
                                <td><input type="text" name="Total1" id="Total1"></td> <!-- total discount -->
                                <td ><input type="text" value="0" name="Billing1" id="Billing1"></td>
                                <td ><input type="text"  name="g_name1" id="g_name1"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="Search Item" id="search2" name="search2">
                                    <div class="results" id="result2"></div>
                                        </td>
                                        <td><input type="text" name="Quantity2" id="quantity2" readonly ></td>
                                        <td><input type="text"  oninput="setRate2()" name="sQuantity2" id="squantity2"  ></td>
                                        <td><input type="text"  name="Rate2" id="Rate2" readonly></td>
                                        <td><input type="text" name="value2" id="value2"></td> <!-- without discount -->
                                        <td><input type="text" value="0" oninput="setRate2()" name="Discount2" id="Discount2"></td> <!-- discount/scheme -->
                                        <td><input type="text" oninput="setRate2()" name="perdiscount2" id="perdiscount2"></td>
                                        <td><input type="text" name="Total2" id="Total2"></td> <!-- total discount -->
                                        <td ><input type="text" value="0" name="Billing2" id="Billing2"></td>
                                        <td ><input type="text"  name="g_name2" id="g_name2"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Search Item" id="search3" name="search3">
                                            <div class="results" id="result3"></div>
                                                </td>
                                                <td><input type="text" name="Quantity3" id="quantity3" readonly ></td>
                                                <td><input type="text"  oninput="setRate3()" name="sQuantity3" id="squantity3"  ></td>
                                                <td><input type="text"  name="Rate3" id="Rate3" readonly></td>
                                                <td><input type="text" name="value3" id="value3"></td> <!-- without discount -->
                                                <td><input type="text" value="0" oninput="setRate3()" name="Discount3" id="Discount3"></td> <!-- discount/scheme -->
                                                <td><input type="text" oninput="setRate3()" name="perdiscount3" id="perdiscount3"></td>
                                                <td><input type="text" name="Total3" id="Total3"></td> <!-- total discount -->
                                                <td ><input type="text" value="0" name="Billing3" id="Billing3"></td>
                                                <td ><input type="text"  name="g_name3" id="g_name3"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" placeholder="Search Item" id="search4" name="search4">
                                                    <div class="results" id="result4"></div>
                                                        </td>
                                                        <td><input type="text" name="Quantity4" id="quantity4" readonly ></td>
                                                        <td><input type="text"  oninput="setRate4()" name="sQuantity4" id="squantity4"  ></td>
                                                        <td><input type="text"  name="Rate4" id="Rate4" readonly></td>
                                                        <td><input type="text" name="value4" id="value4"></td> <!-- without discount -->
                                                        <td><input type="text" value="0" oninput="setRate4()" name="Discount4" id="Discount4"></td> <!-- discount/scheme -->
                                                        <td><input type="text" oninput="setRate4()" name="perdiscount4" id="perdiscount4"></td>
                                                        <td><input type="text" name="Total4" id="Total4"></td> <!-- total discount -->
                                                        <td ><input type="text" value="0" name="Billing4" id="Billing4"></td>
                                                        <td ><input type="text"  name="g_name4" id="g_name4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Search Item" id="search5" name="search5">
                                                            <div class="results" id="result5"></div>
                                                                </td>
                                                                <td><input type="text" name="Quantity5" id="quantity5" readonly ></td>
                                                                <td><input type="text"  oninput="setRate5()" name="sQuantity5" id="squantity5"  ></td>
                                                                <td><input type="text"  name="Rate5" id="Rate5" readonly></td>
                                                                <td><input type="text" name="value5" id="value5"></td> <!-- without discount -->
                                                                <td><input type="text" value="0" oninput="setRate5()" name="Discount5" id="Discount5"></td> <!-- discount/scheme -->
                                                                <td><input type="text" oninput="setRate5()" name="perdiscount5" id="perdiscount5"></td>
                                                                <td><input type="text" name="Total5" id="Total5"></td> <!-- total discount -->
                                                                <td ><input type="text" value="0" name="Billing5" id="Billing5"></td>
                                                                <td ><input type="text"  name="g_name5" id="g_name5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" placeholder="Search Item" id="search6" name="search6">
                                                                    <div class="results" id="result6"></div>
                                                                        </td>
                                                                        <td><input type="text" name="Quantity6" id="quantity6" readonly ></td>
                                                                        <td><input type="text"  oninput="setRate6()" name="sQuantity6" id="squantity6"  ></td>
                                                                        <td><input type="text"  name="Rate6" id="Rate6" readonly></td>
                                                                        <td><input type="text" name="value6" id="value6"></td> <!-- without discount -->
                                                                        <td><input type="text" value="0" oninput="setRate6()" name="Discount6" id="Discount6"></td> <!-- discount/scheme -->
                                                                        <td><input type="text" oninput="setRate6()" name="perdiscount6" id="perdiscount6"></td>
                                                                        <td><input type="text" name="Total6" id="Total6"></td> <!-- total discount -->
                                                                        <td ><input type="text" value="0" name="Billing6" id="Billing6"></td>
                                                                        <td ><input type="text"  name="g_name6" id="g_name6"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text" placeholder="Search Item" id="search7" name="search7">
                                                                            <div class="results" id="result7"></div>
                                                                                </td>
                                                                                <td><input type="text" name="Quantity7" id="quantity7" readonly ></td>
                                                                                <td><input type="text"  oninput="setRate7()" name="sQuantity7" id="squantity7"  ></td>
                                                                                <td><input type="text"  name="Rate7" id="Rate7" readonly></td>
                                                                                <td><input type="text" name="value7" id="value7"></td> <!-- without discount -->
                                                                                <td><input type="text" value="0" oninput="setRate7()" name="Discount7" id="Discount7"></td> <!-- discount/scheme -->
                                                                                <td><input type="text" oninput="setRate7()" name="perdiscount7" id="perdiscount7"></td>
                                                                                <td><input type="text" name="Total7" id="Total7"></td> <!-- total discount -->
                                                                                <td ><input type="text" value="0" name="Billing7" id="Billing7"></td>
                                                                                <td ><input type="text"  name="g_name7" id="g_name7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="text" placeholder="Search Item" id="search8" name="search8">
                                                                                    <div class="results" id="result8"></div>
                                                                                        </td>
                                                                                        <td><input type="text" name="Quantity8" id="quantity8" readonly ></td>
                                                                                        <td><input type="text"  oninput="setRate8()" name="sQuantity8" id="squantity8"  ></td>
                                                                                        <td><input type="text"  name="Rate8" id="Rate8" readonly></td>
                                                                                        <td><input type="text" name="value8" id="value8"></td> <!-- without discount -->
                                                                                        <td><input type="text" value="0" oninput="setRate8()" name="Discount8" id="Discount8"></td> <!-- discount/scheme -->
                                                                                        <td><input type="text" oninput="setRate8()" name="perdiscount8" id="perdiscount8"></td>
                                                                                        <td><input type="text" name="Total8" id="Total8"></td> <!-- total discount -->
                                                                                        <td ><input type="text" value="0" name="Billing8" id="Billing8"></td>
                                                                                        <td ><input type="text"  name="g_name8" id="g_name8"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                <td>
                                                                                    <input type="text" placeholder="Search Item" id="search9" name="search9">
                                                                                    <div class="results" id="result9"></div>
                                                                                        </td>
                                                                                        <td><input type="text" name="Quantity9" id="quantity9" readonly ></td>
                                                                                        <td><input type="text"  oninput="setRate9()" name="sQuantity9" id="squantity9"  ></td>
                                                                                        <td><input type="text"  name="Rate9" id="Rate9" readonly></td>
                                                                                        <td><input type="text" name="value9" id="value9"></td> <!-- without discount -->
                                                                                        <td><input type="text" value="0" oninput="setRate9()" name="Discount9" id="Discount9"></td> <!-- discount/scheme -->
                                                                                        <td><input type="text" oninput="setRate9()" name="perdiscount9" id="perdiscount9"></td>
                                                                                        <td><input type="text" name="Total9" id="Total9"></td> <!-- total discount -->
                                                                                        <td ><input type="text" value="0" name="Billing9" id="Billing9"></td>
                                                                                        <td ><input type="text"  name="g_name9" id="g_name9"></td>
                                                                                    </tr>
            </form>

            </table>

            <div id="bottomFields" >
                <h3> Grand Total: </h3>
                <input placeholder="Grand Total" id="gTotal" type="number" >
            </div>
            <div id="bottom" >
            
            <button type="button" name="insert" id="insert" value="Insert"> Insert </button> </tr>
            <a href="readstockselling.php"><button type="button" name="insert" id="insert" value="Insert" > Read </button></a> </tr>
        </div>

    </div>
</body>
</html>

<script>
        function newCredit() {
    let CurrentCredit = document.getElementById('clientCredit').value;
    let CurrentBill = document.getElementById('clientBill').value;
    // document.getElementById('newCredit').value = CurrentCredit - CurrentBill;
}
        function setRate(){

            const quantity = document.getElementById("squantity").value;
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
            gTotal();
            }
    
        function setRate1(){

            const quantity = document.getElementById("squantity1").value;
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
            gTotal();
            }
            
            function setRate2(){

                const quantity = document.getElementById("squantity2").value;
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
            gTotal();
            }
            
            function setRate3(){

                const quantity = document.getElementById("squantity3").value;
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
                gTotal();
            }

            function setRate4(){

                const quantity = document.getElementById("squantity4").value;
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
            gTotal();
            }

            function setRate5(){

                const quantity = document.getElementById("squantity5").value;
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
            gTotal();
            }

            function setRate6(){

                const quantity = document.getElementById("squantity6").value;
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
            gTotal();
            }

            function setRate7(){

                const quantity = document.getElementById("squantity7").value;
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
            gTotal();
            }

            function setRate8(){
                const quantity = document.getElementById("squantity8").value;
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
            gTotal();
            }
            
            function setRate9(){

                const quantity = document.getElementById("squantity9").value;
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
            gTotal();
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
            let credit = document.getElementById('clientCredit');
            let clientbill = document.getElementById('clientBill');
            // document.getElementById('newCredit').value = credit - clientbill;
            console.log( 'total = ' + gTotal)
        }


const container = document.getElementById('input-cont');

// Call addInput() function on button click



    var a=1;
    function dropDown(e)
    {
    e.preventDefault();
    if(a==1)
    {
    document.getElementById('menu').style.display='block';
    a=0;    
    }
    else
    {
    document.getElementById('menu').style.display='none';
    a=1;    
    }    
    }
    
    function item(x)
    {
    var content=x.id;
    document.getElementById('option').innerHTML=content;
    document.getElementById('menu').style.display='none';
    if(a==1)
    {
     a=0;    
    }
    else
    {
    a=1;    
    }
    }
    </script>