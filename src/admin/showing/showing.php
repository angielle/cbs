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
        <h5 class="modal-title" id="add-movie-data">Add Showing Data</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Form -->
      <form action="showing_pr.php" method="POST">
        <div class="modal-body">  
        
          <?php 
            $conn = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($conn, 'cbs');
            $movie_qry = "select movie_id, name from movies";
            $movie_list = array();
            $movie_res = mysqli_query($conn, $movie_qry) or die('Error '.mysqli_error($conn));
            while($row = mysqli_fetch_array($movie_res)) {
              $movie_list[] = $row['name'];
            }

            $cinema_qry = "select cinema_id, name from cinemas";
            $cinema_list = array();
            $cinema_res = mysqli_query($conn, $cinema_qry) or die('Error '.mysqli_error($conn));
            while($row = mysqli_fetch_array($cinema_res)) {
              $cinema_list[] = $row['name'];
            }            
          ?>

				  <div class="form-group">
            <label>Movie Name</label>
            <select class="browser-default custom-select">
            <?php 
              foreach ($movie_list as $key => $value) {
                echo '<option value="' . $value . '">'. $value . '</option>';
              }
            ?>
            </select>
				  </div>

				  <div class="form-group">
            <label>Cinema Name</label>
            <select class="browser-default custom-select">
            <?php 
              foreach ($cinema_list as $key => $value) {
                echo '<option value="' . $value . '">'. $value . '</option>';
              }
            ?>
            </select>
				  </div>
				  <div class="form-group">
				    <label>Showing From</label>
				    <input type="date" name="length" class="form-control">
				  </div>

          <div class="form-group">
				    <label>Showing To</label>
				    <input type="date" name="length" class="form-control">
				  </div>

          <div class="form-group">
				    <label>Screening Time</label>
				    <input type="time" name="length" class="form-control">
				  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insert_data" class="btn btn-success">Add Showing</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End add modal -->

<!-- Edit modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Showing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- form -->
      <form action="movies_pr.php" method="POST">
      <div class="modal-body">
        <input type="hidden" name="update_id" id="update_id">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="name" class="form-control"  placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label>Genre</label>
          <input type="text" name="genre" id="genre" class="form-control"  placeholder="Enter Genre">
        </div>
        <div class="form-group">
          <label>Year</label>
          <input type="text" name="year" id="year" class="form-control"  placeholder="Enter Year">
        </div>
        <div class="form-group">
          <label>Synopsis</label>
          <textarea type="text" name="synopsis" id="synopsis" class="form-control"  placeholder="Enter Synopsis"></textarea>
        </div>
        <div class="form-group">
          <label>Length</label>
          <input type="text" name="length" id="length" class="form-control"  placeholder="Enter Length">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_data" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End edit modal -->

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Cinema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form -->
      <form action="movies_pr.php" method="POST">
      <div class="modal-body">
      			<input type="hidden" name="delete_id" id="delete_id">
				<h4>Do you want to delete this cinema?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="delete_data" class="btn btn-danger">Yes, <strong>DELETE</strong> it.</button>
      </div>
      </form>
    </div>
  </div>
</div>

<body id="page-top">
  <div id="wrapper">
    <!-- Menu -->
    <?php 
      $page = 'showing';
      include '../../includes/menu.php'; 
    ?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="../users/logout.php">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Showing</h1>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addmodal">Add Showing</button>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Showing</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                    <?php 
                      $conn = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($conn, 'cbs');

                      $qry = "select * from movies";
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
                        </tr>
                      </thead>
                      <?php 
                        while ($row = $res->fetch_assoc()) {
                          $id = $row['movie_id'];
                          $name = $row['name'];
                          $genre = $row['genre'];
                          $year = $row['year'];
                          $synopsis = $row['synopsis'];
                          $length = $row['length'];

                      ?>
                      <!-- <tbody>
                        <tr>
                          <td><?php echo $id; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $genre; ?></td>
                          <td><?php echo $year; ?></td>
                          <td><?php echo $synopsis; ?></td>
                          <td><?php echo $length; ?></td>
                          <td>
                            <button type="button" class="btn btn-success edit">Edit</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger delete">Delete</button>
                          </td>
                        </tr>
                        <?php 
                          }
                        ?>
                      </tbody> -->
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>

</body>

<!-- Bootstrap core JavaScript-->
<script src="../../../assets/js/fontawesome.js"></script>
<script src="../../../assets/jquery/jquery.js"></script>
<script src="../../../assets/js/popper.js"></script>
<script src="../../../assets/js/bootstrap.js"></script>
<script src="../../../assets/jquery/dataTables.js"></script>
<script src="../../../assets/js/dataTables.js"></script>

<script>
	$(document).ready(function(){
		$('.delete').on('click',function(){
			$('#deletemodal').modal('show');
				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();
				console.log(data);
				$('#delete_id').val(data[0]);
		});
	});

	$(document).ready(function(){
		$('.edit').on('click',function(){
			$('#editmodal').modal('show');
				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();
				console.log(data);
				$('#update_id').val(data[0]);
				$('#name').val(data[1]);
				$('#genre').val(data[2]);
				$('#year').val(data[3]);
				$('#synopsis').val(data[4]);
				$('#length').val(data[5]);
		});
	});

</script>

</html>
