<html>
  <?php 
    session_start();
  ?>

  <style>
  .dropdown:hover > .dropdown-menu {
      display: block;
  }
  </style>

  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="dropdown nav-link" href="addmovies.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Snacks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $_SESSION['username']?></a>        
          </li>  
      </ul>
    </div>
  </div>
  </nav>
</html>