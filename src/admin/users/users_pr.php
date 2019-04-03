<?php
session_start();
$mysqli = new mysqli('localhost','root','','cbs') or die(mysqli_error($mysqli));

if(isset($_POST['insert_data'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	$contact = $_POST['contact'];
	$mysqli->query("INSERT INTO customer (`fname`,`lname`,`email`,`un`,`pw`,`contact`) VALUES('$fname','$lname','$email','$username',md5('$password'),'$contact')") or die($mysqli->error);
	// $_SESSION['message'] = "Record has been saved!";
	// $_SESSION['msg_type'] = "success";
	header("location: ../index.php");
}

if(isset($_POST['delete_data'])){
	$id = $_POST['delete_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	$contact = $_POST['contact'];
	$mysqli->query("DELETE FROM customer WHERE customer_id=$id") or die($mysqli->error());
	// $_SESSION['message'] = "Record has been deleted!";
	// $_SESSION['msg_type'] = "danger";
	header("location: ../index.php");
}

if(isset($_POST['update_data'])){
	$id = $_POST['update_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	$contact = $_POST['contact'];
	$mysqli->query("UPDATE customer SET fname='$fname', lname='$lname', email='$email', un='$un', pw=md5('$pw'), contact='$contact' WHERE customer_id='$id'") or die($mysqli->error) ;
	// $_SESSION['message'] = "Record has been updated!";
	// $_SESSION['msg_type'] = "warning";
	header("location: ../index.php");
}
?>