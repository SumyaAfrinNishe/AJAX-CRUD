<?php 
$connect=mysqli_connect('localhost','root','','ajax_crud');

$id = $_GET['userId'];
$select = "SELECT * FROM student WHERE id=$id";
$ex =mysqli_query($connect,$select);
$row = mysqli_fetch_array($ex);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>EDIT PAGE</h1>
        <input id="name" type="text" value="<?php echo $row['name']?>" placeholder="Enter Name"><br>
        <input id="email" type="email" value="<?php echo $row['email']?>" placeholder="Enter Email"><br>
        <input id="pass" type="text" value="<?php echo $row['pass']?>" placeholder="Enter Password"><br>
        <button class="edit" onclick="UPDATE_DATA(<?php echo $row['id']?>)" >Edit Data</button>
</div>
</body>
</html>