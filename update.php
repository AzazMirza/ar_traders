<?php
include 'connection.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    
    $name=($_POST['name']);
    $age=($_POST['age']);
    $sql="update `tyres` set id=$id,name='$name',age='$age'
     where id=$id";
    $result=($con->query($sql));   
    if($result)
    {
        //echo"update successfully";
        header('location:read.php');
    }
    else{
        echo ("connection error");
    }
    }
?>
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label >id</label>
        <input type="text" name="id" autocomplete="off"><br><br>
        <label >name</label>
        <input type="text" name="name" autocomplete="off"><br><br>
        <label >age</label>
        <input type="text" name="age" autocomplete="off"><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>