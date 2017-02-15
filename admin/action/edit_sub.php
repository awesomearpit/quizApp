<?php 
include ('database.php');
?>

<?php 
$sql = "SELECT * FROM subject where id='".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>
<form action="sub_show.php" method="post">
subject:<input type="text" name="subject_name" value="<?php echo $row['subject_name']; ?>"><br />
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br />
<input type="submit" value="update"><br />
</form>

<?php 
	}
} else {
    echo "0 results";
}
$conn->close();

?>
