<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="assets/css/main.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!-- Navigation -->
<?php 
	include 'src/includes/header.php'; 
?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="assets/img/background.png">
		<div class="carousel-caption">
			<h1 class="display-2">Cinema Booking System</h1>
			<h3>Book Movies With Just A Few Clicks</h3>
			<button type="button" class="btn btn-outline-light btn-lg">VIEW MOVIES</button>
			<button type="button" class="btn btn-primary btn-lg">Book Now</button>
		</div>
	</div>
	<div class="carousel-item">
		<img src="assets/img/background2.png">
	</div>
	<div class="carousel-item">
		<img src="assets/img/background3.png">
	</div>
</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">A Cinema Booking service allows to save each individual for the hassle of stayin in queue, waiting for the chance to buy tickets. </p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href=""><button type="button" class="btn btn-outline-secondary btn-lg">Learn More</button></a>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Entertainment with ease</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Welcome to CBS! A website that will satisfy all your entertainment needs.</p>
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


<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Snacks & Movie Combos</h2>
			<p>Movie Experience is not enough without snacks</p>
			<p>A wide variety to choose from</p>
			
			<br>
			<a href="#" class="btn btn-primary">View Menu</a>
		</div>
		<div class="col-lg-6">
			<img src="assets/img/snack.png" class="img-fluid">
		</div>
	</div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>

  
<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Popular</h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/pop1.png">
				<div class="card-body">
					<h4 class="card-title">Alita: Battle Angel</h4>
					<p>Feb 06, 2019 | 2hrs 7mins</p>
					<p class="card-text">A restored cyborg with a heart and soul of a young woman discovers with her caretaker that she is more than what she seems.</p>
					<a href="#" class="btn btn-outline-primary">Buy</a>
					<a href="#" class="btn btn-outline-secondary">View Trailer</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/pop2.png">
				<div class="card-body">
					<h4 class="card-title">Alone/Together</h4>
					<p>Feb 13, 2019 | 1hrs 40mins</p>
					<p class="card-text">Christine an Art Studies major student at University of the Philippines Diliman a smart and very ambitious who is in a relationship with a Biology student at University of Santo Tomas, Raf a very total opposite character of Christine.</p>
					<a href="#" class="btn btn-outline-primary">Buy</a>
					<a href="#" class="btn btn-outline-secondary">View Trailer</a>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/pop3.png">
				<div class="card-body">
					<h4 class="card-title">How to Train Your Dragon: The Hidden World</h4>
					<p>Feb 20, 2019 | 1hrs 52mins</p>
					<p class="card-text">Now chief and ruler of Berk alongside Astrid, Hiccup has created a gloriously chaotic dragon utopia, but the sudden appearance of female Light Fury coincides with the darkest threat their village has ever faced.</p>
					<a href="#" class="btn btn-outline-primary">Buy</a>
					<a href="#" class="btn btn-outline-secondary">View Trailer</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Mission</h2>
			<p>CBS's mission is to give our customers a convenient entertainment experience. Our customers will relax in comfort and watch high-quality presentations of popular movies, all within a point and click from our website. </p>
			<p>We aim to please the community by giving them a fast and reliable transaction. We will also provide our customers with satisfying and reasonably priced snack foods and beverages.</p>
			<br>
		</div>
		<div class="col-lg-6">
			<img src="assets/img/imax.png" class="img-fluid">
		</div>
	</div>
	<hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

<!--- Footer -->
<?php include 'src/includes/footer.php'; ?>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
