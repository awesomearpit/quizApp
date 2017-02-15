<?php 
session_start();
unset($_SESSION['adminid']);
header('Location:user_login.php');

?>