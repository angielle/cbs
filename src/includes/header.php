<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">

<?php 
  define( 'SCRIPT_ROOT', 'http://localhost/cbs/' );
  $logo = SCRIPT_ROOT . "assets/img/logo.png"; 

  $home = SCRIPT_ROOT . "index.php"; 
  $movies = SCRIPT_ROOT . "src/guest/movies/movies.php";
  $snacks = SCRIPT_ROOT . "src/guest/snacks/snacks.php";
  $about =  SCRIPT_ROOT . "src/guest/about/about.php";
  $sign =  SCRIPT_ROOT . "src/guest/login.php";
  $register =  SCRIPT_ROOT . "src/guest/register.php";

  $home_class = ($page == 'home') ? 'nav-item active' : 'nav-item';
  $movies_class = ($page == 'movies') ? 'nav-item active' : 'nav-item';
  $snacks_class = ($page == 'snacks') ? 'nav-item active' : 'nav-item';
  $about_class = ($page == 'about') ? 'nav-item active' : 'nav-item';
  $sign_class = ($page == 'sign') ? 'nav-item active' : 'nav-item';
  $register_class = ($page == 'register') ? 'nav-item active' : 'nav-item';
?>

  <a class="navbar-brand" href="<?= $home ?>"><img src='<?= $logo ?>'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="<?= $home_class ?>">
        <a class="nav-link" href='<?= $home ?>'>Home</a>
      </li>
      <li class="<?= $movies_class ?>">
        <a class="nav-link" href='<?= $movies ?>'>Movies</a>
      </li>
      <li class="<?= $snacks_class ?>">
        <a class="nav-link" href='<?= $snacks ?>'>Snacks</a>
      </li>
      <li class="<?= $about_class ?>">
        <a class="nav-link" href='<?= $about ?>'>About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="<?= $sign_class ?>">
    		<a class="nav-link" href='<?= $sign ?>'>Sign-In</a>      	
      </li>
      <li class="<?= $register_class ?>">
        <a class="nav-link" href='<?= $register ?>'>Register</a>
      </li>    
    </ul>
  </div>
</div>
</nav>