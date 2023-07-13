<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Account</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">account</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->

    <div>
      <?php
      
      require_once('../models/user.php');
      if (isset($_POST['adduser'])) {
        if ($_POST['password'] == $_POST['confirmpassword']) {
          $user = new user(null,$_POST['email'],$_POST['username'], $_POST['password']);
          $result = $user->save();
          echo "<script>alert('$result');</script>";
        }else{
          echo "<script>alert('Password Not Match');</script>";
        }

      }
  
    
      ?>
    </div>    
    
    <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Account</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Re-password</label>
                <input type="password" name="confirmpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>

              <input type="submit" name="adduser" value="submit" class="btn btn-primary">
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary  mt-5" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Add account</button>
    
    <!-- End Example Code -->

    <!-- Update Account code -->
    <div class="modal fade" id="UpdateToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update Account</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Re-password</label>
                <input type="password" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>

              <input type="submit" name="adduser" value="Update" class="btn btn-primary">
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
    <!-- End of update account code -->
  </body>
                  <h5 class="card-title">Recent users</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                      require_once('../models/user.php');
                      $account = new user();
                      $result = $account->getAll();
                      foreach($result as $row){
                        ?>
                     
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['a_id']; ?></a></th>
                        <td><?php echo $row['a_email']; ?></td>
                        <td><?php echo $row['a_username']; ?></td>
                        <td><?php echo $row['a_password']; ?></td>
                        <td><?php echo $row['a_created']; ?></td>
                        <td class="" style="width: auto;">
                        <span class="btn btn-success p-r-6"  data-bs-target="#UpdateToggle" data-bs-toggle="modal">Update</span> &nbsp;&nbsp;&nbsp;
                        <span class="btn btn-danger"><a href="<?php echo str_replace('account.php', $_SERVER['PHP_SELF'], '?delete=' . $row['a_id']); ?>" class="text-white">Delete</a></td>
                      </tr>
                   <?php }  ?>
                    </tbody>
                  </table>

                  <?php
                        require_once('../models/user.php');
                        $cats = new user();

                        if (isset($_GET['delete'])) {
                            $delete = $cats->destroy($_GET['delete']);
                            echo "<script>alert('$delete'); window.history.pushState({}, '', 'account.php'); window.location.reload();</script>";
                        
                        }
                        ?>

                </div> 

              </div>
            </div><!-- End Recent Sales -->

           

          </div>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main>
<!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>