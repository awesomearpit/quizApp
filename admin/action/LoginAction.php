<?php
session_start();
include('database.php');
$username=$_POST['form'];
$password=$_POST['form1'];;
$sql="SELECT * FROM admin_login where username='".$username."' and password='".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$_SESSION['adminid']=$row['id'];
header('Location:../home.php');
	}
	}
else{
header('Location:../login.php');
}
$conn->close();
?>