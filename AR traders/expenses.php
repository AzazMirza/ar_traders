<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Expenses</title>
    <link rel="stylesheet" href="group.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#btn').click(function(e) {
            e.preventDefault(); 

            var name = $('#expense').val();
            var personName = $('#personName').val();
            var amount= $('#amount').val();

            $.ajax({
            url: "addExpense.php",
            method: "POST",
            data: { name: name, personName:personName, amount:amount},
            success: function(data) {
                alert(data);
                $('#expense').val('');
                $('#personName').val('');
                $('#amount').val('');
            },
            });
        });
        });
</script>
</head>
<body>
    <h1>Add Expenses</h1>
    <form action="" method="post">
            <div>

                <label for="expense">Expense</label>
                <input type="text" name="expense" id="expense">
                
                
                <label for="personName">Person Name</label>
                <input type="text" name="personName" id="personName">
                
                <label for="amount">Expense Amount</label>
                <input type="text" name="amount" id="amount">
            </div>
             

        </form>
        <div class="btndiv">

            <button id="btn" type="submit" name="submit">submit</button>
            <button id="btn" ><a href="form1.php">Add Item</a></button>
            <button id="btn" ><a href="readExpenses.php">Read Record</a></button>
            <button onclick="window.print()" >Print </button>
        </div>
    
</body>
</html>