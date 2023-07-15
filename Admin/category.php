<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
      <style>
          .breadcrumb-item a{
            color:blue;
          }
        </style>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                    <!-- Update categorry -->
                    <div class="modal fade" id="myModal" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                        <div class="mb-3">
                        <?php 
                         require_once('../models/category.php');
                         if (isset($_GET['edit'])){
                         $cat = new category();
                         $result = $cat->getById($_GET['edit']);
                         foreach($result as $row){
                        
                        ?>
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" name="name" value="<?php echo $row['c_name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php } }?>
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
                

                    <!-- End of update category -->
                
  
                  <h5 class="card-title">Recent category</h5>
                  <!-- Search form -->
                  <div class="row p-3">
                    <div class="col-md-5 mx-auto p-3 d-flex justify-content-end">
                      <div class="input-group">
                      <input class="form-control border-end-0 border" type="search"  id="searchInput" class="form-control" placeholder="Search by name, category, or description">
                        <!-- <input class="form-control border-end-0 border" type="search" placeholder="search" id="example-search-input"> -->
                        <span class="input-group-append">
                          <button class="btn btn-outline-secondary bg-primary border-start-0 border-bottom-0 border ms-n5" type="button">
                            <i class="bi bi-search text-white"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>


                  <!-- End of search form -->
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
                      <tr class="table-row">
                        <th scope="row"><a href="#"><?php echo $row['c_id'] ?></a></th>
                        <td><?php echo $row['c_name'] ?></td>
                       
                        <td class="" style="width: auto;">
                        <a href="edit_category.php?edit=<?php echo $row['c_id']; ?>" class="btn btn-primary" >Update</a></button> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo str_replace('category.php', $_SERVER['PHP_SELF'], '?delete=' . $row['c_id']); ?>" class="btn btn-danger">Delete</a></td>
                      </tr>
                      <?php } ?>

                      </tbody>
                      </table>

                      <?php
                        require_once('../models/category.php');
                        $cats = new category();

                        if (isset($_GET['delete'])) {
                            $delete = $cats->destroy($_GET['delete']);
                            echo "<script>alert('$delete'); window.history.pushState({}, '', 'category.php'); window.location.reload();</script>";
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
  <script>
      document.getElementById('searchInput').addEventListener('input', function() {
      let input, filter, table, tr, td, i, j, txtValue, searchColumns;
      input = this.value.trim().toUpperCase();
      table = document.querySelector('.datatable');
      tr = table.getElementsByClassName('table-row');
      searchColumns = [0,1,2,3,4,5]; 

      for (i = 0; i < tr.length; i++) {
          let displayRow = false;

          for (j = 0; j < searchColumns.length; j++) {
              td = tr[i].getElementsByTagName('td')[searchColumns[j]];
              if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(input) > -1) {
                      displayRow = true;
                      break;
                  }
              }
          }

          if (displayRow) {
              tr[i].style.display = '';
          } else {
              tr[i].style.display = 'none';
          }
      }
    });
   
</script>

</body>

</html>