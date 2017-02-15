<?php 
include ('admin/action/database.php');
?>

<?php
if(!isset($_SESSION['aa'])){
	$_conn = "";
	foreach($_SESSION['aa'] as $key){
		$conn="id!=".$key." and";
	}
	$conn = rtrim('and',$conn);
}

$sql = "SELECT * FROM where ".$conn."";

?>

<?php   
$a=array();
$b=array();

$id = $_POST['quesid'];
$ans = $_POST['ans'];

$a=array($id);
$_SESSION['aa']=$a;
$_ss['bb']=$b;

$b=ans('$id'=>$ans);
?>