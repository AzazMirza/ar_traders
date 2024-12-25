<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Groups</title>
    <link rel="stylesheet" href="group.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $.ajax({
        url: "getGroup.php",
        method: "GET",
        success: function(data) {
            $('#group').html(data);
        },  
        });
        $(document).ready(function() {
        $('#btn').click(function(e) {
            e.preventDefault(); 

            var name = $('#g_name').val();

            $.ajax({
            url: "addGroup.php",
            method: "POST",
            data: { name: name },
            success: function(data) {
                alert(data);
                $('#g_name').val('');

            },
            });
        });
        });
</script>
</head>
<body>
    <h2>Add Group</h2>
    <form action="" method="post">
        <div>
        <input type="text" name="g_name" id="g_name">
    </div>
</form>
<div class="btndiv">
    <button id="btn" type="submit" name="submit">submit</button>
    <button id="btn" ><a href="form1.php">Add Item</a></button>
</div>
<div id="group"></div>
</body>
</html>