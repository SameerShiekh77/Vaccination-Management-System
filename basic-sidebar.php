
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
                <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>


                <a href="child.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Child Records</a>
                <a href="hospital.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Hospital Records</a>
                <a href="booking-table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Booking Records</a>
                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Log Out</a>
                <a href="signup.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sign Up</a>
             
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->