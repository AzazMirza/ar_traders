<?php 
 include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link defer rel="stylesheet" href="form1.css">
    <script src="form1.js" defer >  </script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
                $(document).ready(function() {
                    $('#search').keyup(function() {
                        var search = $(this).val();
                        if(search != "") {
                        $.ajax({
                            url: "fetchgroupname.php",
                            type: "POST",
                            data: {search: search},
                            success: function(response) {
                                $('#result').fadeIn();
                                $('#result').html(response);
                            }
                        });
                        }
                    });
                    $(document).on('click', 'li', function() {
                        var name = $(this).text();
                        $('#search').val(name);
                        $('#result').fadeOut();
                    });
                    $('#submit').click(function() {
                        var Iname = $('#Iname').val();
                        var ItemDesc = $('#ItemDesc').val();
                        var Rate = $('#Rate').val();
                        var salePrice = $('#salePrice').val();
                        var wholeSale = $('#wholeSale').val();
                        var retail = $('#retail').val();
                        var g_name = $('#search').val();
                        
                        $.ajax({
                        url: "insertItems.php",
                        method: "POST",
                        data: { Iname:Iname, ItemDesc:ItemDesc, Rate:Rate, salePrice:salePrice, wholeSale:wholeSale, retail:retail, g_name:g_name},
                        success: function(data) {
                        // alert(data);
                        }
                    });
                });
                });

         
            </script>
</head>
<body>


    <div id='form-container' >
        <div id="search-wrapper" >
             <h3>Enter Group</h3>
           <div search-cards-container>
        </div> 
        <form onsubmit="event.preventDefault()" action="#" name="myForm">
            <input style="border: solid 2px black; margin-right:10px" type="text" id="search" name="search"><br><br>
                <div id="result">
                    <?php
                    // include 'connection.php';
                    $sql = "SELECT Distinct g_name FROM `group`";
                    $result = $con->query($sql);
                    ?>
                    <div  style="overflow: auto; height: 40vh; background-color: white; padding: 15px; ">
                    <?php
                    if ($result) {
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<li  style=' list-style-type: none; cursor:pointer;  '  tabindex='0'>" . $row["g_name"] . "</li> <hr> ";
                        }
                    }
                    else {
                    echo "<li>No results found</li>";
                    }
                    ?>
                    </div>
                </div>
            </form>
        </div>
       
    <form  id="form" action="#" class="Item" method="post">
        <h3>Enter Item</h3>
        <label> Item Name:</label>
        <div>
        <input class="movableFocus" id="Iname" name="Iname" type="text" ><br>
        <label>Item Desc:</label>
    </div>
    <div>
        <input class="movableFocus" id="ItemDesc" name="ItemDesc" type="text" ><br>
        <label>Purchase price:</label>
    </div>
    <div>
        <input class="movableFocus" id="Rate" name="Rate" type="text" ><br>
        <label>sale-price:</label>
    </div>
    <div>
        <input class="movableFocus" id="salePrice" name="salePrice" type="text" ><br>
        <label>Whole Sale:</label>
    </div>
    <div>
        <input class="movableFocus" id="wholeSale" name="wholeSale" type="text" ><br>
        <label>Retail:</label>
        </div>
    <div>
        <input class="movableFocus" id="retail" name="retail" type="text" ><br> 
        </div>
    
        <div style="display: flex; flex-direction: row; justify-content: space-around; " >
            <input  class=" movableFocus btn" id="submit" type="submit" name="submit" value="Submit" >
            <input class="btn" type="reset" value="reset" >
            <a href="readform1.php"><input class="btn" id="read" type="button" name="read" value="Read" ></a>
            <a href="menu.html"><input class="btn" id="back" type="button" name="back" value="Home" ></a>
            <input class="btn" id="bk-btn" type="button" value="Go back!" onclick="history.back()">
        </div>
    </form>
</div>
</body>
</html>

<script>

   function handleSubmit() {
    console.log('hj')
    document.getElementById('form').submit();
    }

       var allFields = document.getElementsByClassName("movableFocus");
                console.log(allFields.length)
        for (var i = 0; i < allFields.length; i++) {

            allFields[i].addEventListener("keyup", function(event) {

                if (event.keyCode === 40) {
                    console.log('Enter clicked')
                    event.preventDefault();
                    if (this.parentElement.nextElementSibling.querySelector('input')) {
                        this.parentElement.nextElementSibling.querySelector('input').focus();
                    }
                }

                else if (event.keyCode === 38) {
                    console.log('clicked')
                    event.preventDefault();
                    if (this.parentElement.previousElementSibling.querySelector('input')) {
                        this.parentElement.previousElementSibling.querySelector('input').focus();
                    } 
                }
            });

        }



</script>