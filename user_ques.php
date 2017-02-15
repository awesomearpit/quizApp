<?php 
include ('admin/action/database.php');
?>

<?php 
// echo $_GET['id'];
// echo "<br>";
 $sql = "SELECT * FROM question where sub_id='".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>

<form action="ques.php" method="post">
Question: <?php  echo $row['ques_name']; ?>
<br><input type="radio" value="<?php  echo $row['id']; ?>"><?php  echo $row['op1']; ?>
<br><input type="radio" value="<?php  echo $row['id']; ?>"><?php  echo $row['op2']; ?>
<br><input type="radio" value="<?php  echo $row['id']; ?>"><?php  echo $row['op3']; ?>
<br><input type="radio" value="<?php  echo $row['id']; ?>"><?php  echo $row['op4']; ?>
<br><input type="submit" value="next" onclick="ques.php">
<hr>
</form>
<?php 
	}
} else {
    echo "0 results";
}
$conn->close();

?>