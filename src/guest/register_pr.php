<?php
	session_start();
	$_SESSION['error'] = '';
	$_SESSION['loggedin'] = false;
	$_SESSION['username'] = '';
	$errors = array(); 
	$conn = mysqli_connect("localhost", "root", "", "cbs");
 	if(!$conn) {
 		die ('Error in establishing connection to the server!');
 	}

	if(isset($_POST['submit'])) {
		$fname = $_POST['first-name'];
		$lname = $_POST['last-name'];
		$un = $_POST['username'];
		$contact = $_POST['contact-no'];
		$email = $_POST['email'];
		$pw = $_POST['password'];

		$user_check_query = "SELECT * FROM customer WHERE un='$un' OR email='$email' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		
		if ($user) { 
			$_SESSION['error'] = "Account already exists";
			header('location: register.php');
		} else {
			$qry = "INSERT INTO customer (`fname`,`lname`,`email`,`un`,`pw`,`contact`) VALUES ('$fname', '$lname', '$email', '$un', md5('$pw'), '$contact')";
			$result = mysqli_query($conn, $qry);
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $un;
			header('location: ../customer/index.php ');
		}
		
	} 
	
?>
