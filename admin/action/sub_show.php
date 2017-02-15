<?php 
include ('database.php');
$sql = "SELECT * FROM subject";
$result = $conn->query($sql);
?>
<table border="">
<thead>
<th>subject name</th>
<th>delete</th>
<th>Edit</th>
</thead>
<tbody><?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['subject_name']; ?></td>
<td><a href="delete_sub.php?id=<?php echo $row['id']; ?>">Delete</a></td>
<td><a href="edit_sub.php?id=<?php echo $row['id']; ?>">Edit</a></td>
</tr>
<?php 
	}
}
?>
</tbody>
</table>