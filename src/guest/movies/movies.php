<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <link href="../../../assets/css/main.css" rel="stylesheet">
  <script src="../../assets/js/fontawesome.js"></script>
  <link rel="stylesheet" href="../../../assets/css/fontawesome.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!-- Navigation -->
<?php 
	$page = 'movies';
	include '../../includes/header.php'; 
?>
  
<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Movies</h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<?php 
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn, 'cbs');

	$qry = "select * from movies";
	$res = mysqli_query($conn, $qry);
?>

<div class="container-fluid padding">
	<div class="row padding">
	  <?php 
      while ($row = $res->fetch_assoc()) {
        $name = $row['name'];
        $genre = $row['genre'];
        $year = $row['year'];
        $synopsis = $row['synopsis'];
        $length = $row['length'];
    ?>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><?php echo $name; ?></h4>
					<p><?php echo $year ?> | <?php echo $length ?></p>
					<p class="card-text"><?php echo $synopsis; ?></p>
					<a href="#" class="btn btn-outline-primary">Book</a>
					<a href="#" class="btn btn-outline-secondary">View Trailer</a>
				</div>
			</div>
		</div>
    <?php 
      }
    ?>
	</div>
</div>

<!--- Footer -->
<?php include '../../includes/footer.php'; ?>
<script src="../../../assets/js/bootstrap.js"></script>
</body>
</html>
