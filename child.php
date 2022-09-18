<?php
require 'authentication.php';
?>


<!DOCTYPE html>
<html lang="en">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['updatedata']) {
        require '_dbconnect.php';
        $child_id = $_POST['updatedata'];
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $vacination = $_POST['vacination'];
        $sql = "UPDATE `child_details` SET `child_name` = '$name', `child_age` = '$age', `child_dob` = '$dob', `vaccinated` = '$vacination', `child_f_name` = '$fname' WHERE `child_details`.`child_id` = $child_id";
        $result = mysqli_query($conn, $sql);
        header("location:child.php");
    } else {

        require '_dbconnect.php';
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $vacination = $_POST['vacination'];
        $sql = "INSERT INTO `child_details` (`child_name`, `child_age`, `child_dob`, `vaccinated`, `child_f_name`) VALUES ('$name', '$age', '$dob', '$vacination', '$fname')";
        $result = mysqli_query($conn, $sql);
        header("location:child.php");
    }
}
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


                    <a href="child.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Child Records</a>
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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-around mb-3">

                                <h6 class="mb-4">Children List</h6>
                                <button type="button" class="btn btn-outline-success text-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Enter Child Detail</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">


                                            <form method="POST">

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Child Name</label>
                                                    <input type="text" name="name" class="form-control" id="name">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="fname" class="form-label">Father Name</label>
                                                    <input type="text" name="fname" class="form-control" id="fname">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="age" class="form-label">Age</label>
                                                    <input type="number" name="age" class="form-control" id="age">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="dob" class="form-label">Date of Birth</label>
                                                    <input type="date" name="dob" class="form-control" id="dob">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="v" class="form-label">is Vaccinated?</label>
                                                    <input type="text" name="vacination" class="form-control" id="v">
                                                </div>

                                                <button type="submit" class="btn btn-outline-success">Submit</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table text-center align-middle table-bordered table-hover mb-0 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Child Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Date of Birth</th>
                                            <th scope="col">Vaccinated</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col" colspan="3" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require '_dbconnect.php';
                                        $sql = "SELECT * FROM `child_details`";
                                        $result = mysqli_query($conn, $sql);
                                        $num = mysqli_num_rows($result);
                                        if ($num > 0) {


                                            // We can fetch in a better way using the while loop
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo
                                                '<tr>
                                            <th scope="col">' . $row['child_id'] . '</th>
                                            <td>' . $row['child_name'] . '</td>
                                            <td>' . $row['child_age'] . '</td>
                                            <td>' . $row['child_dob'] . '</td>
                                            <td>' . $row['vaccinated'] . '</td>
                                            <td>' . $row['child_f_name'] . '</td>
                                            <td><a href="" type="button" class="btn btn-success text-right" data-bs-toggle="modal" data-bs-target="#updatemodal' . $row["child_id"] . '">Update</a></td>
                                            <td><a href="child_delete.php?id=' . $row["child_id"] . '" type="button" class="btn btn-primary text-right">Delete</a></td>
                                        </tr>
                                        
                                        <div class="modal fade" id="updatemodal' . $row["child_id"] . '" tabindex="-1" aria-labelledby="updatemodal' . $row["child_id"] . '" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Enter Child Detail</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
            
                                                    <div class="modal-body">
                                                  
            
                                                        <form method="POST">
                                                           
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Child Name</label>
                                                                <input type="text" value=' . $row["child_name"] . ' name="name" class="form-control" id="name">
                                                                <input type="hidden" value=' . $row["child_id"] . ' name="updatedata"
                                                            </div>
            
                                                              
                                                            <div class="mb-3">
                                                                <label for="fname" class="form-label">Father Name</label>
                                                                <input type="text" value=' . $row["child_f_name"] . '  name="fname" class="form-control" id="fname">
                                                            </div>
                                                             
                                                            <div class="mb-3">
                                                                <label for="age" class="form-label">Age</label>
                                                                <input type="number"value=' . $row["child_age"] . '  name="age" class="form-control" id="age">
                                                            </div>
            
                                                             
                                                            <div class="mb-3">
                                                                <label for="dob" class="form-label">Date of Birth</label>
                                                                <input type="date" name="dob" value=' . $row["child_dob"] . '  class="form-control" id="dob">
                                                            </div>
            
                                                            <div class="mb-3">
                                                                <label for="vacination" class="form-label">is Vaccinated?</label>
                                                                <input type="text" name="vacination" value=' . $row["vaccinated"] . '  class="form-control" id="vacination">
                                                            </div>
                                                           
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>';
                                            }
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


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
        <!-- Content End -->


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