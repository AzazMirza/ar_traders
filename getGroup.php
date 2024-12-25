<?php
include 'connection.php';
?>
<?php echo "<h3>Added groups</h3>";?>
<div id="gn" >
    <table border=  1px>
        <tbody>
            <?php
           $sql="SELECT distinct g_name FROM `group`";
           $result=($con->query($sql));
           
           if($result){
               while($row=mysqli_fetch_assoc($result))
               {
                   // $id=$row['id'];
                   $name=$row['g_name'];
                   
                   echo'<tr>
                   <td>'.$name.' <br></td>
                   </tr>';
                }
            }
            ?>
    </tbody>
</table>
</div>