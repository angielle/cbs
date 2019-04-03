<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link href="../../assets/css/main.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/cbs/src/includes/header.php"; ?>

<form class="modal-content"  method="POST" action="login_pr.php">
    <div class="imgcontainer">
      <img src="../../assets/img/logo.png" alt="logo" class="logo">
      <h1 style="text-align:center">Sign In</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="un" id="un">
      <input type="password" placeholder="Enter Password" name="pw" id="pw">        
      <button class="modal-btn" type="submit" id="sub" name="sub">Sign In</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
      	<?php 
      		if(!isset($_SESSION)) { 
		        session_start(); 
		    } 
      		if (!empty($_SESSION['error'])){
	          echo '<div class="alert alert-danger text-center p-1" role="alert">';
	          echo $_SESSION['error'];
	          echo '</div>';
	          unset($_SESSION['error']);
		        
      		}
        ?> 
    </div>
  </form>

<!--- Footer -->
<?php include '../includes/footer.php'; ?>
<script src="../../assets/js/bootstrap.js"></script>
</body>
</html>
