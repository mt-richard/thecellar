<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Cellar | Restaurant Admin Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/The-cellar-logo.png" rel="icon">
  <link href="assets/img/The-cellar-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="../images/wpcontent/The-cellar-logo.png" alt="">
        
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $admin_firstname;?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid-fill"></i>
          <span style="color:#012970;">Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="category.php">
          <i class="bi bi-bookmarks-fill"></i>
          <span  style="color:#012970;">Category</span>
        </a>
      </li>
      <!-- End Category Nav -->
      <li class="nav-item">
        <a class="nav-link " href="product.php">
          <i class="bi bi-bag-fill"></i>
          <span style="color:#012970;">Product</span>
        </a>
      </li>
      <!-- End Product Nav -->
      <li class="nav-item">
        <a class="nav-link " href="booked.php">
          <i class="bi bi-calendar-check-fill"></i>
          <span style="color:#012970;">Booked</span>
        </a>
      </li>
      <!-- End Booked Nav -->
      <li class="nav-item">
        <a class="nav-link " href="contact.php">
          <i class="bi bi-person-lines-fill"></i>
          <span style="color:#012970;">Contact</span>
        </a>
      </li>
      <!-- End Contact Nav -->
      <li class="nav-item">
        <a class="nav-link " href="subscribe.php">
          <i class="bi bi-person-fill-add"></i>
          <span style="color:#012970;">Subscribers</span>
        </a>
      </li>
      <!-- End subscribers Nav -->
      <li class="nav-item">
        <a class="nav-link " href="account.php">
          <i class="bi bi-person-fill"></i>
          <span style="color:#012970;">Users</span>
        </a>
      </li>
      <!-- End users Nav -->
    </ul>

  </aside><!-- End Sidebar-->