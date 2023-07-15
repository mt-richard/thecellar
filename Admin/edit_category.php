<?php
include 'navbar.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Category</h1>
      <nav>
      <style>
          .breadcrumb-item a{
            color:blue;
          }
        </style>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="category.php">category</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-md-6">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <div class="container">
    <div class="row">
        <div class="col-12">
          <?php
           require_once('../models/category.php');
           if (isset($_GET)){
           $catId = $_GET['edit'];
             if (isset($_POST['update_category'])){
              $cat = new category();
              $result = $cat->update($catId, $_POST['name']);
              echo "<script>alert('$result'); window.history.pushState({}, '', 'category.php'); window.location.reload();</script>";
         }}
          ?>

            <form class="p-5" method="POST">
                <div class="mb-3">
                  <?php 
                   require_once('../models/category.php');
                   $cat = new category();
                   $result = $cat->getById($_GET['edit']);
                   foreach($result as $row){
                    ?>
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                    <input type="text" name="name" value="<?php echo $row['c_name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php } ?>
                </div>
                
                <button type="submit" name="update_category" class="btn btn-primary">Update</button>
            </form>
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