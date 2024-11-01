<html>
<head>
<script src="jquery-3.7.1.min.js"></script>
</head>
</html>

<script>
function ModifyEnterKeyPressAsTab() {
    if ( (window.event && window.event.keyCode == 40) || (window.event && window.event.keyCode == 38) ){
      window.event.keyCode == 9;
      alert('arrow key pressed')
    }
}

// TextBox textbox1 = new TextBox();
// div.Attributes.Add("onKeyDown", "ModifyEnterKeyPressAsTab();");



  // $(document).keydown(
  //     function(e)
  //     {    
  //         if (e.keyCode == 40) {      
  //             $(".move").next().focus();
  //           alert('e.keyCode == 40')
  //         }
  //         if (e.keyCode == 38) {      
  //             $(".move:focus").prev().focus();
  
  //         }
  //     }
  // );
                                                              
</script>


<?php
include 'connection.php';
// Query create karein
$sql = "SELECT Distinct g_name FROM `group` WHERE g_name LIKE '%" . $_POST['search'] . "%'";
$result = $con->query($sql);
?>
<div style="overflow: auto; height: 40vh; background-color: white; padding: 15px; ">
<?php
if ($result) {
  // Data ko fetch karein
  while($row = $result->fetch_assoc()) {
    echo "<li style=' list-style-type: none;' class='move' onKeyDown='ModifyEnterKeyPressAsTab()' tabindex='0'>" . $row["g_name"] . "</li> <hr>" ;
  }
}
else {
  echo "<li>No results found</li>";
}
?>

</div>