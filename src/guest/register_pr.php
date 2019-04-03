<?php
	session_start();
 	$_SESSION['error'] = '';
	$conn = mysqli_connect("localhost", "root", "", "cbs");
	if(!$conn) {
 		die ('Error in establishing connection to the server!');
 	}

	if(isset($_POST['submit'])) {
		$fn = $_POST['first-name'];
		$ln = $_POST['last-name'];
		$un = $_POST['username'];
		$cn = $_POST['contact-no'];
		$em = $_POST['email'];
		$pw = $_POST['password'];
		$qry = "INSERT INTO customer VALUES ('$fn', '$ln', '$un', '$cn', '$em', md5('$pw'))";
		// die($qry);
		$result = mysqli_query($conn, $qry);
		if($result){
			die('success');
		} else {
			die('unsuccessful');
		}
	} 
	
?>
