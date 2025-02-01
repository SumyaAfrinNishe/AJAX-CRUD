<?php 
$connect=mysqli_connect('localhost','root','','ajax_crud');
$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$id=$_GET['userId'];

$update = "UPDATE student SET name='$name', email='$email', pass='$pass' WHERE id=$id";
$ex= mysqli_query($connect,$update);
if($ex){
    echo "Update success";
}else{
    echo "Update failed";
}

?>