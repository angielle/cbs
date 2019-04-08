<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">ADMIN</div>
  </a>
  <hr class="sidebar-divider my-0">

  <?php 
    define( 'SCRIPT_ROOT', 'http://localhost/cbs/' );

    $home = SCRIPT_ROOT . "src/admin/index.php";
    $movies = SCRIPT_ROOT . "src/admin/movies/movies.php";
    $cinemas =  SCRIPT_ROOT . "src/admin/cinemas/cinemas.php";
    $showing =  SCRIPT_ROOT . "src/admin/showing/showing.php";

    $home_class = ($page == 'home') ? 'nav-item active' : 'nav-item';
    $movies_class = ($page == 'movies') ? 'nav-item active' : 'nav-item';
    $cinemas_class = ($page == 'cinemas') ? 'nav-item active' : 'nav-item';
    $showing_class = ($page == 'showing') ? 'nav-item active' : 'nav-item';
    
  ?>
  <li class="<?= $home_class ?>">
    <a class="nav-link" href="<?= $home ?>">
      <span>Users</span></a>
  </li>

  <li class="<?= $movies_class ?>">
    <a class="nav-link" href="<?= $movies ?>">
      <span>Movies</span></a>
  </li>

  <li class="<?= $cinemas_class ?>">
    <a class="nav-link" href="<?= $cinemas ?>">
      <span>Cinemas</span></a>
  </li>

</ul>