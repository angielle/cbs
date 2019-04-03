 <?php
 	session_start();	
 	$_SESSION['error'] = '';
 	$_SESSION['loggedin'] = false;
 	$_SESSION['username'] = '';
 	$conn = mysqli_connect("localhost", "root", "", "cbs");
 	if(!$conn) {
 		die ('Error in establishing connection to the server!');
 	}

	if(isset($_POST['un']) && isset($_POST['sub'])) {
		$un = $_POST['un'];
		$pw = $_POST['pw'];

		if (ctype_alnum($un) && ctype_alnum($pw)) {
			$qry = "SELECT un, pw FROM customer WHERE un = '$un' AND pw = md5('$pw')";
			$result = mysqli_query($conn, $qry);

			if (mysqli_num_rows($result) == 1) {
				// Password is correct
				$_SESSION['username'] = $un;
				if ($un == 'admin') {
					header('location: /cbs/src/admin/index.php');
				} else {
					header('location: /cbs/src/customer/index.php');
				}
			} else {
				// Username and password is incorrect
				$_SESSION['error'] = 'Username and password is incorrect';
				header('location: /cbs/src/guest/login.php');
			}
		} else {
			$_SESSION['error'] = 'Invalid characters';
			header('location: /cbs/src/guest/login.php');
		}

	} else {
		header('location: /cbs/guest/login.php');
	}

?>
