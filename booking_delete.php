
<?php
require 'authentication.php';
?>
<head>
    <meta charset="utf-8">
    <title>VMS - | Child Records</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    <?php
    require 'css/basic.css';
    ?>
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>VMS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/testimonial-1.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION["username"];}?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>


                    <a href="child.php" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Child Records</a>
                    <a href="hospital.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Hospital Records</a>
                    <a href="booking-table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Booking Records</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Log Out</a>
                    <a href="signup.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sign Up</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->


            <?php
            require 'navbar.php';

            ?>
            <!-- Navbar End -->

            <?php

            require '_dbconnect.php';
            $id = $_GET['id'];
            $sql = "DELETE FROM `booking_details` WHERE `booking_details`.`booking_id` = $id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfully Deleted</strong>Record has deleted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  
  </div>
<a href="booking-table.php" type="button" class="btn btn-outline-danger text-center d-flex justify-content-center" >Go Back</a>
'
;
            }
            else{
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>No Record Found</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
            }

            ?>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4 fixed-bottom">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Vaccination Managment System</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">

                            Designed By <a href="#">Muhammad Sameer</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>

       </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>