<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booked</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">booked</li>
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

    
    <!-- End Example Code -->
  </body>
                  <h5 class="card-title">Recent booked</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Time</th>
                        <th scope="col">Check_in</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Space</th>
                        <th scope="col">Status</th>

                      </tr>
                    </thead>
                    <tbody>

                    <?php

                        require_once('../models/booking.php');
                        $book = new booking();
                        $result = $book->getAll();
                        foreach ($result as $row){
                            ?> 
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['b_id'] ?></a></th>
                        <td><?php echo $row['b_name'] ?></td>
                        <td><?php echo $row['b_email'] ?></td>
                        <td><?php echo $row['b_phone'] ?></td>
                        <td><?php echo $row['b_time'] ?></td>
                        <td><?php echo $row['b_checkin'] ?></td>
                        <td><?php echo $row['b_guest'] ?></td>
                        <td><?php echo $row['b_space'] ?></td>
                       
                       
                        <td class="" style="width: auto;">
                        <a href="<?php echo str_replace('booked.php', $_SERVER['PHP_SELF'], '?delete=' . $row['b_id']); ?>" class="btn btn-danger">Delete</a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                  <?php
                        require_once('../models/booking.php');
                        $book = new booking();

                        if (isset($_GET['delete'])) {
                            $delete = $book->destroy($_GET['delete']);
                            echo "<script>alert('$delete'); window.history.pushState({}, '', 'booked.php'); window.location.reload();</script>";
                        
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