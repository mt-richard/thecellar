<?php
include 'navbar.php';
error_reporting(E_ALL); // Specify the error reporting level
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Update Account</h1>
    <nav>
    <style>
          .breadcrumb-item a{
            color:blue;
          }
        </style>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="account.php">account</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-md-6">
        <div class="row">
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <?php
                      require_once('../models/user.php');
                      if (isset($_GET['edit'])) { 
                        $catId = $_GET['edit'];
                        if (isset($_POST['update_account'])) {
                          $cat = new user();
                          $result = $cat->update($catId, $_POST['email'], $_POST['username'], $_POST['password']);
                          echo "<script>alert('$result'); window.history.pushState({}, '', 'account.php'); window.location.reload();</script>";
                        }
                      }
                      ?>

                      <form class="p-5" method="POST"> 
                        <div class="mb-3">
                          <?php
                          require_once('../models/user.php');
                          $user = new user();
                          $result = $user->getById($_GET['edit']);
                          foreach($result as $row){
                            ?>
                          

                          
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" value="<?php echo $row['a_email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" value="<?php echo $row['a_username']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" name="password" value="<?php echo $row['a_password']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         <?php } ?>
                        </div>

                        <button type="submit" name="update_account" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
