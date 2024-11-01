<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="group.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>


    <script>
    // $(document).ready(function() {
    //     $('#btn').click(function() {reloads page but work 
        $(document).ready(function() {
        $('#btn').click(function(e) {
            e.preventDefault(); 
            var name = $('#c_name').val();
            var address = $('#address').val();
            var credit = $('#credit').val();

            var phone = $('#phone').val();
            var cnic = $('#cnic').val();
            var ntn = $('#ntn').val();
            var shopname = $('#shopname').val();
            var personname = $('#personname').val();
            var city = $('#city').val();
            $.ajax({
                url: "addClient.php",
                method: "POST",
                data: { name: name, address: address, credit: credit, phone: phone, cnic: cnic, ntn: ntn, shopname: shopname, personname: personname, city: city  },
                success: function(data) {
                    alert(data);
                    $('#c_name').val('');
                    $('#address').val('');
                    $('#credit').val('');

                    $('#phone').val('');
                    $('#cnic').val('');
                    $('#ntn').val('');
                    $('#shopname').val('');
                    $('#personname').val('');
                    $('#city').val('');
                }
            });
        });
    });
</script>
</head>
<body>
    <h2>Add Clients</h2>
    <form action="" method="post">
        <div>
        <label for="c_name">Name </label>
        <input type="text" name="c_name" id="c_name">

        <label for="address">Address </label>
        <input type="text" name="address" id="address">

        <label for="credit">Credit </label>
        <input type="number" name="credit" id="credit">

        <label for="phone">Phone </label>
        <input type="number" name="phone" id="phone">

        <label for="cnic">CNIC </label>
        <input type="number" name="cnic" id="cnic">
</div>
<div>
        <label for="ntn">NTN </label>
        <input type="number" name="ntn" id="ntn">

        <label for="shopname">Shop Name </label>
        <input type="text" name="shopname" id="shopname">

        <label for="personname">Person Name </label>
        <input type="text" name="personname" id="personname">

        <label for="city">City </label>
        <input type="text" name="city" id="city">

    </div>
</form>
<div class="btndiv">
<button id="btn" type="submit" name="submit">Submit</button>
<button  ><a href="form1.php">Add Item</a></button>
<button ><a href="menu.html"> Home </a> </button>

</div>
</body>
</html>
