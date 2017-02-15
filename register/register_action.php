<?php
include('../admin/action/database.php');
$fname=$_POST['form'];
$lname=$_POST['form1'];
$email=$_POST['form2'];
$mobile=$_POST['form3'];
$pass=$_POST['form4'];
$gender=$_POST['form6'];
$sql="insert into register_user( fname,lname,email,mobile,pass,gender) values ('".$fname."','".$lname."','".$email."','".$mobile."','".$pass."','".$gender."')";
if($conn->query($sql)=== true){
	// echo "record insert";
}
else{
	
	// echo "Error";
}
header('Location:../index.php');
$conn->close();
?>