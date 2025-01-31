<?php
$connect = mysqli_connect('localhost','root','','ajax_crud');

$userId = $_POST['userId'];
$delete = "DELETE FROM student WHERE id=$userId";
$query = mysqli_query($connect, $delete);
if($query){
    echo "Delete confirm";
}
else{
    echo "Failed";
}
?>