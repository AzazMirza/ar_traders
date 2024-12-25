<?php
include 'connection.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from `tyres`where id=$id";
    $result=($con->query($sql));
    if($result){
        //echo"deleted successfully";
        header('location:read.php');
    }else{
        die(mysqli_error($con));
    }
}
?>