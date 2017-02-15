<html>
<head></head>
<body>
    <form action="ques_action.php" method="post">
    
	<?php 
	include ('database.php');
      $sql = "SELECT * FROM subject";
      $result = $conn->query($sql);
    ?><select name="sub_id"><?php 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?><option value="<?php echo $row['id']; ?>"><?php echo $row['subject_name']; ?></option><?php 
}
}
	?>
	</select>
	<textarea name="question" placeholder="enter question" id="q">
	
	</textarea><br>
	<textarea name="option1" placeholder="enter Option1" id="op1">
	
	</textarea><br>
	<textarea name="option2" placeholder="enter Option2" id="op2">
	
	</textarea><br>
	<textarea name="option3" placeholder="enter Option3" id="op3">
	
	</textarea><br>
	<textarea name="option4" placeholder="enter Option4" id="op4">
	
	</textarea>
	<br>
	<input type="radio" value="a" name="ans" >A<br>
	<input type="radio" value="b" name="ans">B<br>
	<input type="radio" value="c" name="ans">C<br>
	<input type="radio" value="d" name="ans">D<br>
	<input type="submit" value="Submit Quiz" id="ans">
	</form>
</body>
</html>