<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Invoice Number</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<!-- Your input field and button -->
<input type="text" id="invoiceInput">
<button onclick="updateInvoice()">Update Invoice</button>

<script>
function updateInvoice() {
  $.ajax({
    url: 'fetchmaxinvoice.php', 
    method: 'GET',
    success: function(data) {
        var newInvoice = parseInt(data) + 1;
        $('#invoiceInput').val(newInvoice);
    },
        error: function(error) {
        console.error('Error fetching max invoice:', error);
    }
  });
}
</script>

</body>
</html>
