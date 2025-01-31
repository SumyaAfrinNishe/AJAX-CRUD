<?php
$connect=mysqli_connect('localhost','root','','ajax_crud');
$name =$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$insert="INSERT INTO student(name,email,pass) VALUES('$name','$email','$pass')";
$query=mysqli_query($connect,$insert);
if($query){
    echo "data insert success";
}else{
    echo "data insert failed";
}
?>
