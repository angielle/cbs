<?php
session_start();
$mysqli = new mysqli('localhost','root','','cbs') or die(mysqli_error($mysqli));

if(isset($_POST['insert_data'])){
	$name = $_POST['name'];
	$seats = $_POST['seats'];
	$mysqli->query("INSERT INTO cinemas (`name`,`seats`) VALUES('$name','$seats')") or die($mysqli->error);
	
	header("location: cinemas.php");
}

if(isset($_POST['delete_data'])){
	$id = $_POST['delete_id'];
	$mysqli->query("DELETE FROM cinemas WHERE cinema_id=$id") or die($mysqli->error());
	header("location: cinemas.php");
}

if(isset($_POST['update_data'])){
	$id = $_POST['update_id'];
	$name = $_POST['name'];
	$seats = $_POST['seats'];
	$mysqli->query("UPDATE cinemas SET name='$name', seats='$seats' WHERE cinema_id='$id'") or die($mysqli->error) ;
	header("location: cinemas.php");
}
?>