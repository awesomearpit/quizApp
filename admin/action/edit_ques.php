<?php 
include ('database.php');
?>

<?php 
$sql = "SELECT * FROM question where id='".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 
?>
<form action="ques_show.php" method="post">
<?php 
include ('database.php');
$sql = "SELECT * FROM subject";
$result = $conn->query($sql);
?><select name="subid"><?php 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?><option value="<?php echo $row['id']; ?>"><?php echo $row['subject_name']; ?></option><?php 
}
}
	?>
	</select>
	<textarea name="question" placeholder="enter question" value="<?php echo $row['q']; ?>">
	
	</textarea><br>
	<textarea name="option1" placeholder="enter Option1" value="<?php echo $row['op1']; ?>">
	
	</textarea><br>
	<textarea name="option2" placeholder="enter Option2" value="<?php echo $row['op2']; ?>">
	
	</textarea><br>
	<textarea name="option3" placeholder="enter Option3"value="<?php echo $row['op3']; ?>">
	
	</textarea><br>
	<textarea name="option4" placeholder="enter Option4" value="<?php echo $row['op4']; ?>">
	
	</textarea>
	<br>
	<input type="radio" value="a" name="ans" <?php if($row['ans']=="a"){ echo "checked";} ?> >A<br>
	<input type="radio" value="b" name="ans" <?php if($row['ans']=="b"){ echo "checked";} ?>>B<br>
	<input type="radio" value="c" name="ans" <?php if($row['ans']=="c"){ echo "checked";} ?>>C<br>
	<input type="radio" value="d" name="ans" <?php if($row['ans']=="d"){ echo "checked";} ?>>D<br>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br />
	<input type="submit" value="Submit Quiz">
	</form>
<?php 
	}
} else {
    echo "0 results";
}
$conn->close();

?>	