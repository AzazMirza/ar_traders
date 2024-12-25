<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $id=($_POST['id']);
    $name=($_POST['name']);
    $age=($_POST['age']);
    $sql="INSERT INTO `tyres`(`id`, `name`, `age`)
     VALUES ('$id','$name','$age')";
    $result=($con->query($sql));   
    if($result)
    {
        //echo"inserted";
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
        <input type="id" name="id" autocomplete="off"><br><br>
        <label >name</label>
        <input type="name" name="name" autocomplete="off"><br><br>
        <label >age</label>
        <input type="age" name="age" autocomplete="off"><br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html> 
