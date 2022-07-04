<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lou Geh Supermarket</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <a href="dashboard.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">LG Supermarket</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form rounded-10 d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-success badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">M. Habla </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>MCASH</h6>
                            <span>UI Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="./landingPage/index.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard.php">
                    <i class="bi bi-columns-gap"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="transactions.php">
                    <i class="bi bi-currency-exchange"></i>
                    <span>Sales Transaction</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="customers.php">
                    <i class="bi bi-people-fill"></i>
                    <span>Customers</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="items.php">
                    <i class="bi bi-cart-dash-fill"></i>
                    <span>Items</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="suppliers.php">
                    <i class="bi bi-truck"></i>
                    <span>Suppliers</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Customers</h1>
            <nav class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Customers</li>
                    </ol>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        Add Customer
                    </button>
                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <?php
                                include "dbconnection.php";
                                if (isset($_POST['addCustomer'])) {

                                    $firstname = $_POST['customer_firstname'];
                                    $middlename = $_POST['customer_middlename'];
                                    $lastname = $_POST['customer_lastname'];
                                    $address = $_POST['customer_address'];
                                    $contactno = $_POST['customer_contact_number'];

                                    mysqli_query($connection, "INSERT INTO customers (customer_firstname, customer_middlename, customer_lastname, customer_address, customer_contact_number) 
                        VALUES ('$firstname ', '$middlename', '$lastname',  '$address', '$contactno' )");
                                }
                                ?>



                                <div class="modal-body">
                                    <form class="row g-3" method="POST">
                                        <div class="col-md-5">
                                            <label for="inputName5" class="form-label">First Name</label>
                                            <input type="text" name="customer_firstname" class="form-control" placeholder="First Name" id="inputName5" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputName5" class="form-label">M.I</label>
                                            <input type="text" name="customer_middlename" class="form-control" placeholder="M.I" id="inputName5" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="inputName5" class="form-label">Last Name</label>
                                            <input type="text" name="customer_lastname" class="form-control" placeholder="Last Name" id="inputName5" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Customer Address</label>
                                            <input type="text" name="customer_address" class="form-control" placeholder="Address" id="inputName5" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Contact Number</label>
                                            <input type="text" name="customer_contact_number" class="form-control" placeholder="Contact Number" id="inputName5" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="addCustomer" class="btn btn-success">Save changes</button>
                                        </div>
                                    </form><!-- End Multi Columns Form -->
                                </div>

                            </div>
                        </div>
                    </div><!-- End Vertically centered Modal-->
                </div>

            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th class="text-center" scope="col">First Name</th>
                                        <th class="text-center" scope="col">Last Name</th>
                                        <th class="text-center" scope="col">Last Name</th>
                                        <th class="text-center" scope="col">Address</th>
                                        <th class="text-center" scope="col">Contact Number</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <?php
                                        include "dbconnection.php";
                                        $customers =  mysqli_query($connection, "select * from customers");
                                        while ($row = mysqli_fetch_array($customers)) {
                                        ?>
                                    <tr>
                                        <th class="align-middle" scope="row"><?php echo $row['customer_id'] ?></th>
                                        <td class="align-middle"><?php echo $row['customer_firstname'] ?></td>
                                        <td class="align-middle"><?php echo $row['customer_middlename'] ?></td>
                                        <td class="align-middle"><?php echo $row['customer_lastname'] ?></td>
                                        <td class="align-middle"><?php echo $row['customer_address'] ?></td>
                                        <td class="align-middle"><?php echo $row['customer_contact_number'] ?></td>
                                        <td class="align-middle">
                                            <a type="button" class="btn btn-success" href="customerProfile.php?customer_id=<?php echo $row['customer_id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                            <a type="button" class="btn btn-danger" href="customer-delete.php?customer_id=<?php echo $row['customer_id'] ?>"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>

                                <?php
                                        }
                                ?>


                                </tr>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>