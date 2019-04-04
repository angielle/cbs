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
	include '../../includes/header_login.php'; 
?>
  
<!--- Snacks -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Snacks</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Welcome to CBS! A website that will satisfy all your entertainment needs.</p>
		</div>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="../../../assets/img/popcorn.jpg">
				<div class="card-body">
					<h4 class="card-title">Popcorn</h4>
        </div>
      </div>
    </div>

		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="../../../assets/img/hotdog.jpg">
				<div class="card-body">
					<h4 class="card-title">Hotdog</h4> 
        </div>
      </div>
    </div>

		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="../../../assets/img/nachos.jpg">
				<div class="card-body">
					<h4 class="card-title">Nachos and Fries</h4>
        </div>
      </div>
    </div>
	</div>
</div>

</body>

<!--- Footer -->
<?php include '../../includes/footer.php'; ?>
<script src="../../../assets/js/bootstrap.js"></script>
</html>
