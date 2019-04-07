<?php
session_start();
$mysqli = new mysqli('localhost','root','','cbs') or die(mysqli_error($mysqli));

if(isset($_POST['insert_data'])){
	$name = $_POST['name'];
	$genre = $_POST['genre'];
	$year = $_POST['year'];
	$synopsis = $_POST['synopsis'];
	$length = $_POST['length'];
	$mysqli->query("INSERT INTO movies_showing (`name`,`genre`,`year`,`synopsis`,`length`) VALUES('$name','$genre','$year','$synopsis','$length')") or die($mysqli->error);
	header("location: movies.php");
}

if(isset($_POST['delete_data'])){
	$id = $_POST['delete_id'];
	$mysqli->query("DELETE FROM movies WHERE movie_id=$id") or die($mysqli->error());
	header("location: movies.php");
}

if(isset($_POST['update_data'])){
	$id = $_POST['update_id'];
	$name = $_POST['name'];
	$genre = $_POST['genre'];
	$year = $_POST['year'];
	$synopsis = $_POST['synopsis'];
	$length = $_POST['length'];
	$mysqli->query("UPDATE movies SET name='$name', genre='$genre', year='$year', synopsis='$synopsis', length='$length' WHERE movie_id='$id'") or die($mysqli->error) ;;
	header("location: movies.php");
}
?>