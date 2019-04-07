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

<?php
  $page = 'register';
	include '../includes/header.php'; 
?>

<form class="modal-content"  method="POST" action="login_pr.php">
    <div class="imgcontainer">
      <img src="../../assets/img/logo.png" alt="logo" class="logo">
      <h1 style="text-align:center">Register</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="First Name" name="first-name">
      <input type="text" placeholder="Last Name" name="last-name">  
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Contact Number" name="contact-no">
      <input type="email" placeholder="E-mail Address" name="email">  
      <input type="password" placeholder="Password" name="password">   
      <input type="password" placeholder="Confirm Password" name="confirm-password">     
      <button class="modal-btn" type="submit" name="submit" value="signup">Register</button>
      <?php 
	      if (!empty($_SESSION['error'])){
	        echo '<div class="alert alert-danger text-center p-1" role="alert">';
	        echo $_SESSION['error'];
	        
	        if ($_SESSION['error'] == 'Incorrect password') {
	          echo '<br/>';
	          echo $_SESSION['retries'] . ' retries left';
	        }
	        echo '</div>';
	        unset($_SESSION['error']);
	        unset($_SESSION['retries']);
	      }
      ?> 
    </div>
  </form>


<!--- Footer -->
<?php include '../includes/footer.php'; ?>
<script src="../../assets/js/bootstrap.js"></script>
</body>
</html>