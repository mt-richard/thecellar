<?php
include 'navbar.php';
?>
  <?php
       
       require_once('../models/product.php');
     
          
              $proId = $_GET['edit'];
              if (isset($_POST['updateProduct'])) {
                require_once('../models/product.php');
                $pro = new product();
                $result = $pro->update($proId, $_POST['category'],$_POST['name'], $_POST['desc'], $_POST['size'], $_POST['price'], $_POST['image']);
                echo "<script>alert('$result'); window.history.pushState({}, '', 'product.php'); window.location.reload();</script>";
              }
       ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Product</h1>
      <nav>
      <style>
          .breadcrumb-item a{
            color:blue;
          }
        </style>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="product.php">product</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

                    
    <div class="container">
      <div class="row">
      <div class="col-md-6 ">
    
        <form method="POST" action="">
                       <?php
                          require_once('../models/product.php');
                          $user = new product();
                          $result = $user->getById($_GET['edit']);
                          foreach($result as $row){
                      ?>
                          
                          <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" name="name" value="<?php echo $row['p_name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Category</label>
                <select name="category" id="exampleInputEmail1" class="form-select" aria-label="Default select example">
                <option label="<?php echo $row['p_category']; ?>" value="<?php echo $row['p_category']; ?>"  ></option>
                <?php
      
                  require_once('../models/category.php');
                      $cat = new category();
                      $result = $cat->getAll();
                      foreach($result as $myrow){
                         $rowname = $myrow['c_name'];
                        echo "<option value='$rowname' label='$rowname'></option>";
                      }
                  ?>
                  
              </select>

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Description</label>
                <input type="text" name="desc" value="<?php echo $row['p_desc']; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Size</label>
                <input type="text" name="size" value="<?php echo $row['p_size']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Price</label>
                <input type="number" name="price" value="<?php echo $row['p_price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 
              </div>
              <?php }?>

                <input type="submit" name="updateProduct" value="Update" class="btn btn-primary">
               
                </form>
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