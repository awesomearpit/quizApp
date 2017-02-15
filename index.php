<?php 
session_start();
if(!isset($_SESSION['adminid'])){
header('Location:user_login/user_login.php');
}
?>
<?php 
include ('admin/action/database.php');
$sql = "SELECT * FROM subject";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?> <a href="user_ques.php?id=<?php echo $row['id']; ?> "> <?php 
echo $row['subject_name'];
?></a><?php 
echo "<br>";
echo "<br>";
echo "<br>";
	}
}
?>
<a href="user_login/user_logout.php">Logout</a>
