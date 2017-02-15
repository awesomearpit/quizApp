<?php
include('database.php');
$sub_id = $_POST['sub_id'];
$ques_name = $_POST['question'];
$op1 = $_POST['option1'];
$op2 = $_POST['option2'];
$op3 = $_POST['option3'];
$op4 = $_POST['option4'];
$ans = $_POST['ans'];
 $sql="insert into question(sub_id,ques_name,op1,op2,op3,op4,ans) values ('$sub_id.','$ques_name','$op1','$op2','$op3','$op4','$ans')";
 if($conn->query($sql)=== true){
	// echo "record insert";
}
else{
	
	// echo "Error";
}
header('Location:ques_show.php');
$conn->close();
?>