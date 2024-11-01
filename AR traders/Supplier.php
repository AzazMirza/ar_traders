<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
    <link rel="stylesheet" href="group.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#btn').click(function(e) {
            e.preventDefault(); 
            var name = $('#s_name').val();
            var address = $('#address').val();
            var credit = $('#credit').val();
            var phone = $('#phone').val();
            var cnic = $('#cnic').val();
            var ntn = $('#ntn').val();
            var personname = $('#personname').val();
            var city = $('#city').val();
            var chalanvoucher = $('#chalanvoucher').val();
            var builty = $('#builty').val();


            $.ajax({
                url: "addSupplier.php",
                method: "POST",
                data: { name: name, address: address, credit: credit, phone: phone, cnic: cnic, ntn: ntn, personname: personname, city: city, chalanvoucher: chalanvoucher, builty: builty  },
                success: function(data) {
                    alert(data);
                    $('#s_name').val('');
                    $('#address').val('');
                    $('#credit').val('');
                    $('#phone').val('');
                    $('#cnic').val('');
                    $('#ntn').val('');
                    $('#personname').val('');
                    $('#city').val('');
                    $('#chalanvoucher').val('');
                    $('#builty').val('');
                }
            });
        });
    });
</script>
</head>
<body>
    <h2>Add Suppliers</h2>
    <form action="" method="post">
        <div>

            <label for="s_name">Name </label>
            <input type="text" name="s_name" id="s_name">
            <label for="address">Address </label>
            <input type="text" name="address" id="address">
            <label for="credit">Credit </label>
            <input type="text" name="credit" id="credit">
            <label for="phone">Phone </label>
        <input type="number" name="phone" id="phone">
        
        <label for="cnic">CNIC </label>
        <input type="number" name="cnic" id="cnic">
    </div>
    <div>

        <label for="ntn">NTN </label>
        <input type="number" name="ntn" id="ntn">
        
        

        <label for="personname">Person Name </label>
        <input type="text" name="personname" id="personname">

        <label for="city">City </label>
        <input type="text" name="city" id="city">

        <label for="chalanvoucher">Chalan / Voucher </label>
        <input type="number" name="chalanvoucher" id="chalanvoucher">

        
        <label for="builty">Builty Number </label>
        <input type="number" name="builty" id="builty">
    </div>

</form>
<div class="btndiv">
<button id="btn" type="submit" name="submit">Submit</button>
<button id="btn" ><a href="form1.php">Add Item</a></button>
</div>
</body>
</html>
