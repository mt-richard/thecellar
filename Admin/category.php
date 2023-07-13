<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">category</li>
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

    
                <div class="">
                    <?php
                    if(isset($_POST['addCategory'])){
                        require_once('../models/category.php');
                        $cat = new category(null,$_POST['name']);
                        $result = $cat->save();
                        echo "<div class='centered-alert'><script>alert('$result');</script></div>";
                    }
                    ?> 
                </div>


    
                <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <input type="submit" name="addCategory" value="submit" class="btn btn-primary">
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
                <button class="btn btn-primary  mt-5" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Add Category</button>
                
    <!-- End Example Code -->

                
  
                  <h5 class="card-title">Recent category</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <div class="">
                    <?php

                        require_once('../models/category.php');
                        $allcat = new category();
                        $result = $allcat->getAll();
                        foreach ($result as $row){
                            ?>   
                </div>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $row['c_id'] ?></a></th>
                        <td><?php echo $row['c_name'] ?></td>
                       
                        <td class="" style="width: auto;"><button class="btn btn-success">Update</button> &nbsp;&nbsp;&nbsp;<a href="<?php echo str_replace('category.php', $_SERVER['PHP_SELF'], '?delete=' . $row['c_id']); ?>" name="deletebtn" class="btn btn-danger">Delete</a></td>
                      </tr>
                      <?php } ?>

                      </tbody>
                      </table>

                      <?php
                        require_once('../models/category.php');
                        $cats = new category();

                        if (isset($_GET['delete'])) {
                            $delete = $cats->destroy($_GET['delete']);
                            echo "<script>alert('$delete'); window.history.pushState({}, '', 'category.php');</script>";
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