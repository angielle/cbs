<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <link href="../../../assets/css/main.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!-- Navigation -->
<?php 
    $page = 'about';
	include '../../includes/header.php'; 
?>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">About</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">With our Cinema Booking System, you can now book cinema tickets in the Philippines effectively and efficiently. Take your movie experience to a new level.</p>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<!-- <i class="fas fa-code"></i> -->
			<i class="fas fa-film"></i>
			<h3>EVERYTHING</h3>
			<p>All the popular titles</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-ticket-alt"></i>
			<h3>NO HASSLE</h3>
			<p>Book as much as you want</p>
		</div>
		<div class="col-sm-12 col-sm-6 col-md-4">
			<i class="far fa-clock"></i></i>
			<h3>NO TIME WASTED</h3>
			<p>Sign-in, Book, Payment</p>
		</div>
	</div>
<hr class="my-4">
</div>


<!--- Footer -->
<?php include '../../includes/footer.php'; ?>
<script src="../../../assets/js/bootstrap.js"></script>
</body>
</html>
