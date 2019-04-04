<html>
  <?php 
    session_start();
    define( 'SCRIPT_ROOT', 'http://localhost/cbs/' );
    $logo = SCRIPT_ROOT . "assets/img/logo.png"; 
    $home = SCRIPT_ROOT . "src/customer/index.php"; 
    $movies = SCRIPT_ROOT . "src/customer/movies/movies.php";
    $snacks = SCRIPT_ROOT . "src/customer/snacks/snacks.php";
    $about =  SCRIPT_ROOT . "src/customer/about/about.php";
    $profile =  SCRIPT_ROOT . "src/customer/profile/profile.php";

  ?>

  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src='<?= $logo ?>'></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href='<?= $home ?>'>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?= $movies ?>'>Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?= $snacks ?>'>Snacks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?= $about ?>'>About</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= $profile ?>"><?php echo $_SESSION['username']?></a>    
        </li>    
      </ul>
    </div>
  </div>
  </nav>
</html>