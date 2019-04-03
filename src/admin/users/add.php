<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../assets/css/admin.css" rel="stylesheet">

</head>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link href="../../../assets/css/admin.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
         <span>Users</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../movies/movies.php">
          <span>Movies</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../cinemas/cinemas.php">
          <span>Cinemas</span></a>
      </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form class="user" action="add_pr.php" method="POST">
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="fname" id="fname" class="form-control form-control-user" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="lname" id="lname" class="form-control form-control-user" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                          <input type="text" name="un" id="un" class="form-control form-control-user" placeholder="Username">
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                          <input type="password" name="pw" id="pw" class="form-control form-control-user" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <input type="text" name="contact" id="contact" class="form-control form-control-user" placeholder="Contact">
                      </div>
                      <button type="submit" name="add_user" class="btn btn-primary">Add User</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../../assets/js/jquery.js"></script>
  <script src="../../../assets/js/bootstrap.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>

</html>
