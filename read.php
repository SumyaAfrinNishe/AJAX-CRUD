<?php
$connect=mysqli_connect('localhost','root','','ajax_crud');

$select ="SELECT * FROM student";
$ex= mysqli_query($connect,$select);
while($row=mysqli_fetch_array($ex)){
    ?>

    <tr>
    <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['pass']?></td>
        <td>
        <button id="edit" onclick="Edit(<?php echo $row['id'];?>)">Edit</button>
        <button onclick="Delete(<?php echo $row['id'];?>)">Delete</button>
    </td>
    </tr>


<?php } ?>

?>