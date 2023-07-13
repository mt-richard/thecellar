<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
          
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    
    
    <!-- End Example Code -->
  </body>
                  <h5 class="card-title">Recent Contact us</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>
                        <th scope="col">Created_at</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      require_once('../models/contact.php');
                      $contact = new contact();
                      $result = $contact->getAll();
                      foreach($result as $row){
                        ?>
                     
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['co_id'] ?></a></th>
                        <td><?php echo $row['co_name'] ?></td>
                        <td><?php echo $row['co_email'] ?></td>
                        <td><?php echo $row['co_phone'] ?></td>
                        <td><?php echo $row['co_message'] ?></td>
                        <td><?php echo $row['co_created'] ?></td>
                        <td class="" style="width: auto;">
                        <a href="<?php echo str_replace('contact.php', $_SERVER['PHP_SELF'], '?delete=' . $row['co_id']); ?>" class="btn btn-danger">Delete</a></td>
                    
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>


                  <?php
                        require_once('../models/contact.php');
                        $contact = new contact();

                        if (isset($_GET['delete'])) {
                            $delete = $contact->destroy($_GET['delete']);
                            echo "<script>alert('$delete'); window.history.pushState({}, '', 'contact.php'); window.location.reload();</script>";
                        
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