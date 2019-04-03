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

<!-- Add modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-movie-data">Add Movie Data</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      

      <!-- Form -->
      <form action="movies_pr.php" method="POST">
        <div class="modal-body">
        <?php 
            $conn = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($conn, 'cbs');

            $qry = "select movie_id, name from movies";
            $res = mysqli_query($conn, $qry);
            while ($row = mysqli_fetch_array($res)) {
              $list = $row['name'];

          ?>
          
          <?php
            }
          ?>

				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" name="name" class="form-control"  placeholder="Enter Name">
				  </div>
				  <div class="form-group">
				    <label>Genre</label>
				    <input type="text" name="genre" class="form-control"  placeholder="Enter Genre">
				  </div>
				  <div class="form-group">
				    <label>Year</label>
				    <input type="text" name="year" name="" class="form-control"  placeholder="Enter Year">
				  </div>
				  <div class="form-group">
				    <label>Synopsis</label>
				    <textarea type="text" name="synopsis" class="form-control"  placeholder="Enter Synopsis"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Length</label>
				    <input type="text" name="length" class="form-control"  placeholder="Enter Length">
				  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insert_data" class="btn btn-success">Add Movie</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End add modal -->


<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">
         <span>Users</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../movies/movies.php">
          <span>Movies</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span>Movies Showing</span></a>
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
            <h1 class="h3 mb-0 text-gray-800">Movies Showing</h1>
            <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Movies Showing</a>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Movies Showing</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                    <?php 
                      $qry = "select * from movies_showing";
                      $res = mysqli_query($conn, $qry);
                    ?>

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Movie Name</th>
                          <th scope="col">Cinema Name</th>
                          <th scope="col">Showing From</th>
                          <th scope="col">Showing To</th>
                          <th scope="col">Screening Time</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <?php 
                        while ($row = $res->fetch_assoc()) {
                          $id = $row['movie_id'];
                          $movie_qry = "select * from movies where movie_id ==".$row['movie_id']."";
                          $name = $row['name'];
                          $seats = $row['seats'];

                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $id; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $seats; ?></td>
                          <td>
                            <button type="button" class="btn btn-success edit_movies">Edit</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <?php 
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=".././../assets/js/jquery.js"></script>
  <script src="../../../assets/js/bootstrap.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>

</html>
