<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <link href="../../../assets/css/main.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!-- Navigation -->
<?php 
	include '../../includes/header_login.php'; 
?>

<?php 
  $conn = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($conn, 'cbs');

  $un = $_SESSION['username'];
  $qry = "SELECT * FROM customer WHERE un = '$un';";
  $res = mysqli_query($conn, $qry);
  while ($row = $res->fetch_assoc()) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $contact = $row['contact'];
?>

<!--- Snacks -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Profile</h1>
		</div>
		<hr>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row text-center padding">
    <div class="col d-flex justify-content-center profile-card">
    <div class="card" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $fname . " " . $lname ?> </h5>
      </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Email:   <?= $email ?></li>
      <li class="list-group-item">Contact: <?= $contact ?></li>
    </ul>
    <div class="card-body">
      <a href="logout.php" class="card-link">Logout</a>
    </div>
  </div>
</div>
	</div>
</div>


<?php 
  }
?>
</body>

<!--- Footer -->
<?php include '../../includes/footer.php'; ?>
<script src="../../../assets/js/bootstrap.js"></script>

</html>
