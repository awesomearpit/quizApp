<?php 
include ('database.php');
$sql = "SELECT * FROM form_user";
$result = $conn->query($sql);
?>
<table border="">
<thead>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>state</th>
<th>Address</th>
<th>Pincode</th>
<th>Gender</th>
<th>photo</th>
</thead>
<tbody><?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['pincode']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['photo']; ?></td>
</tr>
<?php 
	}
}
?>
</tbody>
</table>