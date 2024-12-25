<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="ar traders";
$con=new mysqli($localhost,$username,$password,$dbname);
if($con){
    //echo"connect";
}else{
    die(mysqli_error($con));
}
?>