<?php
session_start();
include('../admin/action/database.php');
$username=$_POST['form'];
$pass=$_POST['form1'];;
$sql="SELECT * FROM register_user where email='".$username."' and pass='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$_SESSION['adminid']=$row['id'];
header('Location:../index.php');
	}
	}
else{
header('Location:user_login.php');
}
$conn->close();
?>