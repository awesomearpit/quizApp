<?php 
session_start();
if(!isset($_SESSION['adminid'])){
header('Location:login.php');
}

?>
<a href="action/sub_add.php">add subject</a><br />
<a href="action/sub_show.php">show subject</a><br />
<a href="action/ques_add.php">add question</a><br />
<a href="action/ques_show.php">show question</a><br />
<a href="action/logout.php">Logout</a>