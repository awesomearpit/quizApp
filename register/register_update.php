<?php
include('../admin/action/database.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];
$id=$_POST['id'];
 $sql = "UPDATE register_user SET fname='$fname' ,lname='$lname' ,email='$email' ,mobile='$mobile' ,pass='$pass' ,gender='$gender' WHERE id='".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header("Location:../index.php");
?>