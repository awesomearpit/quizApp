<?php 
include ('database.php');
$sql = "SELECT * FROM question";
$result = $conn->query($sql);
?>
<table border="">
<thead>
<th>Question name</th>
<th>option1</th>
<th>option2</th>
<th>option3</th>
<th>option4</th>
<th>Answer</th>
<th>delete</th>
<th>Edit</th>
</thead>
<tbody><?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['ques_name']; ?></td>
<td><?php echo $row['op1']; ?></td>
<td><?php echo $row['op2']; ?></td>
<td><?php echo $row['op3']; ?></td>
<td><?php echo $row['op4']; ?></td>
<td><?php echo $row['ans']; ?></td>
<td><a href="delete_ques.php?id=<?php echo $row['id']; ?>">Delete</a></td>
<td><a href="edit_ques.php?id=<?php echo $row['id']; ?>">Edit</a></td>
</tr>
<?php 
	}
}
?>
</tbody>
</table>