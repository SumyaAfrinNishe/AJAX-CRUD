<?php
$connect=mysqli_connect('localhost','root','','ajax_crud');

$select ="SELECT * FROM student";
$ex= mysqli_query($connect,$select);
while($row=mysqli_fetch_array($ex)){
    ?>

    <tr>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['pass']?></td>
    </tr>

    
<?php } ?>

?>