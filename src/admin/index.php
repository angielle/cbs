<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinema Booking System</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link href="../../assets/css/admin.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<!-- Add modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Form -->
      <form action="users/users_pr.php" method="POST">
        <div class="modal-body">
				  <div class="form-group">
				    <label>First Name</label>
				    <input type="text" name="fname" class="form-control"  placeholder="Enter First Name">
				  </div>
				  <div class="form-group">
				    <label>Last Name</label>
				    <input type="text" name="lname" class="form-control"  placeholder="Enter Last Name">
				  </div>
				  <div class="form-group">
				    <label>E-mail</label>
				    <input type="email" name="email" name="" class="form-control"  placeholder="Enter E-Mail">
				  </div>
				  <div class="form-group">
				    <label>Username</label>
				    <input type="text" name="username" class="form-control"  placeholder="Enter Username">
				  </div>
				  <div class="form-group">
				    <label>Password</label>
				    <input type="password" name="password" class="form-control"  placeholder="Enter Password">
				  </div>
				  <div class="form-group">
				    <label>Contact</label>
				    <input type="number" name="contact" class="form-control"  placeholder="Enter Phone Number">
				  </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insert_data" class="btn btn-success">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End edit modal -->

<!-- Edit modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- form -->
      <form action="users/users_pr.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Edit First Name">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control"  placeholder="Edit Last Name">
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="form-control"  placeholder="Edit E-mail">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="un" id="un" class="form-control"  placeholder="Edit Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pw" id="pw" class="form-control"  placeholder="Edit Password">
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="text" name="contact" id="contact" class="form-control"  placeholder="Edit Contact">
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


<body id="page-top">
  
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="#">
         <span>Users</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="movies/movies.php">
          <span>Movies</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cinemas/cinemas.php">
          <span>Cinemas</span></a>
      </li>


    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav=link" href="users/logout.php">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
              </a>
              <!-- <a class="nav-link dropdown-toggle" href="users/logout.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span> -->
              <!-- </a> -->
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addmodal">Add User</button>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                    <?php 
                      $conn = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($conn, 'cbs');

                      $qry = "select * from customer";
                      $res = mysqli_query($conn, $qry);
                    ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">Contact</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <?php 
                        while ($row = $res->fetch_assoc()) {
                          $id = $row['customer_id'];
                          $fname = $row['fname'];
                          $lname = $row['lname'];
                          $email = $row['email'];
                          $un = $row['un'];
                          $pw = $row['pw'];
                          $contact = $row['contact'];

                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $id; ?></td>
                          <td><?php echo $fname; ?></td>
                          <td><?php echo $lname; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $un; ?></td>
                          <td><?php echo $pw; ?></td>
                          <td><?php echo $contact; ?></td>
                          <td>
                            <button type="button" class="btn btn-success edit">Edit</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger delete">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                        }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          <!-- End row -->
          </div> 
        <!-- Edit container fluid -->
        </div> 

      <!-- Edit content -->                  
      </div> 

    <!-- End content wrapper -->
    </div>  
  
  <!-- End wrapper -->
  </div> 

</body>
  
<!-- Bootstrap core JavaScript-->
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
  // Delete
	$(document).ready(function(){
		$('.deletebtn').on('click',function(){
			$('#deletemodal').modal('show');
				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();
				console.log(data);
				$('#delete_id').val(data[0]);
		});
	});

  // Edit
	$(document).ready(function(){
		$('.edit').on('click',function(){
			$('#editmodal').modal('show');
				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();
				console.log(data);
				$('#update_id').val(data[0]);
				$('#fname').val(data[1]);
				$('#lname').val(data[2]);
				$('#email').val(data[3]);
				$('#un').val(data[4]);
				$('#pw').val(data[5]);
				$('#contact').val(data[6]);
		});
	});
</script>

</body>

</html>
