<?php
include('database.php');
$subject_name=$_POST['sub1'];
$sql="insert into subject( subject_name) values ('".$subject_name."')";
if($conn->query($sql)=== true){
	// echo "record insert";
}
else{
	
	// echo "Error";
}
header('Location:sub_show.php');
$conn->close();
?>
