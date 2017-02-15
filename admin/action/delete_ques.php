<?php 
include('database.php');
echo $_GET['id'];

$sql1="delete from question where id='".$_GET['id']."'";

if ($conn->query($sql1) === TRUE) 
{
	// echo "deleted";
} else {
	// echo "not deleted";
  }
 header("Location: ques_show.php"); 
?>