<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login_new.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Scrap Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link rel="apple-touch-icon" sizes="180x180" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/logo/Scrap_service.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <!--div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, New York</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div-->
        <!--div class="container px-0"-->
        <div class="container topbar px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h2 class="text-danger display-6">The Scrap Service</h2>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-danger"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#scrap-rate" class="nav-item nav-link">Scrap Rate</a>
                        <a href="#why-us" class="nav-item nav-link">Why us?</a>
                        <a href="#top-scrap-collectors" class="nav-item nav-link">Scrap Collectors</a>
                        <!--a href="shop-detail.html" class="nav-item nav-link">Shop Detail</a-->
                        <!--div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="cart.html" class="dropdown-item">Cart</a>
                                    <a href="chackout.html" class="dropdown-item">Chackout</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div-->
                        <!--a href="contact.html" class="nav-item nav-link">Contact</a-->
                    </div>
                    <!-----SCRAP RATE DROP DOWN ---->
                    <!--div class="d-flex m-2 me-0">

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" style="color: var(--bs-danger);" data-bs-toggle="dropdown">Currunt Rate</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a class="dropdown-item" style="pointer-events: none">News paper - RS 15-17/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Office paper - RS 15-18/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Cardboard - RS 7-9/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Iron - RS 20-30/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Brass - RS 300-305/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Steel - RS 37-39/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Aluminium - RS 105-107/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Copper - RS 420-425/kg</a>
                                <a class="dropdown-item" style="pointer-events: none">Plastic - RS 10-12/kg</a>
                            </div>
                        </div>

                    </div-->
                    <!-----SCRAP RATE DROP DOWN close---->
                    <div class="d-flex m-2 me-0">

                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" style="color: var(--bs-danger);" data-bs-toggle="dropdown">Login</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="login.php" class="dropdown-item">User</a>
                                <a href="admin_login.php" class="dropdown-item">Admin</a>

                            </div>
                        </div> -->
                    </div>
                    <div class="d-flex m-2 me-0">
                        <div class="nav-item dropdown">
                            <a href="logout.php" class="nav-link dropdown" style="color: var(--bs-danger);">Logout</a>


                            <!-- <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-danger"></span>
                            <a href="logout.php" class="fa fa-bars text-danger">Logout</a>
                        </button> -->
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <!--div class="container py-5"-->
        <div class="container py-2">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">

                    <h5 class="mb-5 display-6 text-danger">Sell your recyclables online with <span class="mb-5 display-4 text-secondary">The Scrap Service!</span></h5>
                    <p class="text-dark fs-5 fw-bold mb-0">Paper - Plastics - Metals - Appliances</p>
                    <!--div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div-->
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">

                                <img src="img/logo/Scrap_service.png" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <!--a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a-->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-3">
                <h1 class="mb-0">How it works</h1>
                <div class="col-md-6 col-lg-4">

                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-calendar-day fa-3x text-white"></i>

                        </div>
                        <div class="featurs-content text-center">
                            <h5>Schedule a pickup</h5>
                            <!--p class="mb-0">Free on order over $300</p-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-truck fa-3x text-white"></i>

                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pickup at your address</h5>
                            <!--p class="mb-0">100% security payment</p-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-solid fa-rupee-sign fa-3x text-white"></i>

                        </div>
                        <div class="featurs-content text-center">
                            <h5>Receive payment</h5>
                            <!--p class="mb-0">30 day money guarantee</p-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Scrap Rate Start-->
    <div class="container-fluid fruite py-5" id="scrap-rate">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Scrap Rates</h1>
                    </div>

                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 180px;">Normal Recyclables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 180px;">Large Appliances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 180px;">Small Appliances
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 180px;">Mobiles & Computers
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!--Note section Start-->
                <div class="container-fluid featurs py-3">
                    <div class="container py-3">
                        <div class="row g-3">

                            <div class="col-md-4 col-lg-10">

                                <div class="featurs-item text-center rounded bg-light p-4">

                                    <div class="featurs-content text-start">
                                        <!--h5>Note:</h5-->
                                        <p class="mb-0" style="color: #004085;"><span style="color: #004085; font-weight: bold; font-size: large;">Note: </span> &nbsp;&nbsp;The prices may vary with fluctuation in the scrap market.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Note section End-->


                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">

                                    <!--For auto update scrap price-->
                                    <?php
                                    /*$con = mysqli_connect("localhost", "root", "");
                                    mysqli_select_db($con, "the_scrap_service");*/
                                    $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    /* $queryNewPaper = "SELECT category, price FROM scrap_details WHERE category = 'NEWS PAPERS'";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                        echo '<h5>' . $row['category'] . '</h5>';
                                        echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                        // Format the price in the desired format with a random range
                                        $formattedPrice = formatPrice($row['price']);

                                        echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                        echo '</div>';
                                        echo '</div>';
                                    }*/

                                    //mysqli_close($conn);

                                    // Function to format the price with a random range
                                    function formatPrice($price)
                                    {
                                        // Define the minimum and maximum range for the random number
                                        $minRange = 3;
                                        $maxRange = 5; // Adjust this value based on your desired maximum range

                                        // Generate a random number within the specified range
                                        $randomNumber = rand($minRange, $maxRange);

                                        // Convert price to an integer
                                        $priceInt = intval($price);

                                        // Calculate the maximum price based on the random number
                                        $maxPrice = $priceInt + $randomNumber;

                                        // Format the price string
                                        $formattedPrice = "RS {$priceInt}-{$maxPrice} / kgs";

                                        return $formattedPrice;
                                    }



                                    // // Function to format the price with a random range
                                    // function formatPrice($price)
                                    // {
                                    //     $minRange = 3;
                                    //     $maxRange = 5; // Adjust this value based on your desired maximum range
                                    //     $randomNumber = rand($minRange, $maxRange);
                                    //     $priceInt = intval($price);
                                    //     $maxPrice = $priceInt + $randomNumber;
                                    //     $formattedPrice = "RS {$priceInt}-{$maxPrice} / kgs";
                                    //     return $formattedPrice;
                                    // }
                                    ?>


                                    <!--div class="col-md-6 col-lg-4 col-xl-3"-->
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!--img src="img/SCRAP_ICON_IMAGE/news_paper.jpg" class="img-fluid w-100 rounded-top" alt=""-->
                                                <img src="img/SCRAP_IMAGE/old-newspaper.avif" class="img-fluid w-100 rounded-top" alt="">

                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->

                                            <?php

                                            // $queryNewPaper = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'News Papers'";
                                            // $result = mysqli_query($conn, $queryNewPaper);


                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'News Papers' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                //$formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            }

                                            // // Fetch and display the result
                                            // if ($row = mysqli_fetch_assoc($result)) {
                                            //     echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                            //     echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                            //     echo '<div class="d-flex justify-content-center flex-lg-wrap">';
                                            //     $formattedPrice = formatPrice($row['avg_price']);
                                            //     echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';
                                            //     echo '</div>';
                                            //     echo '</div>';
                                            // }

                                            ?>

                                            <!--div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                <h5>NEWS PAPERS</h5-->
                                            <!--p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p-->
                                            <!--div class="d-flex justify-content-center flex-lg-wrap"-->
                                            <!-- <p class="text-dark fs-5 fw-bold mb-0">RS 12-15 / kg</p> -->
                                            <!--p class="text-dark fs-8 fw-bold mb-0 ">RS 15-17 / kg</p-->
                                            <!--a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a-->
                                            <!--/div>
                                        </div-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/OFFICE_PAPER.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/office-file2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryOfficePapers = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Office Papers'";
                                            // $result = mysqli_query($conn, $queryOfficePapers);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Office Papers' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                //$formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/COPIES_BOOKS.avif" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/books3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryBooks = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Books'";
                                            // $result = mysqli_query($conn, $queryBooks);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Books' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/CARDBOARD_2.avif" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/CardBoard.jpeg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryCardboard = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Cardboard'";
                                            // $result = mysqli_query($conn, $queryCardboard);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Cardboard' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/Plastic_2.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/Plastic3.avif" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryPlastic = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Plastic'";
                                            // $result = mysqli_query($conn, $queryPlastic);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Plastic' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/IRON_1.avif" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/Iron.jpeg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryIron = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Iron'";
                                            // $result = mysqli_query($conn, $queryIron);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Iron' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/STEEL_1.avif" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/Steel1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $querySteel = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Steel'";
                                            // $result = mysqli_query($conn, $querySteel);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Steel' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/ALUMINIUM_1.avif" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/Aluminum1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryAluminum = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Aluminum'";
                                            // $result = mysqli_query($conn, $queryAluminum);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Aluminum' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);


                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/BRASS_1.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/BRASS.jpeg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryBrass = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Brass'";
                                            // $result = mysqli_query($conn, $queryBrass);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Brass' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);


                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/COPPER_3.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/copper1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <?php

                                            // $queryCopper = "SELECT scrap_category_name, scrap_category_price FROM tbl_scrap_category WHERE scrap_category_name = 'Copper'";
                                            // $result = mysqli_query($conn, $queryCopper);

                                            // Modified SQL query to get distinct categories with average price
                                            $queryNewPaper = "SELECT scrap_category_name, AVG(scrap_category_price) as avg_price FROM tbl_scrap_category WHERE scrap_category_name = 'Copper' GROUP BY scrap_category_name";
                                            $result = mysqli_query($conn, $queryNewPaper);


                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<div class="p-2 border border-secondary border-top-0 rounded-bottom">';
                                                echo '<h5>' . $row['scrap_category_name'] . '</h5>';
                                                echo '<div class="d-flex justify-content-center flex-lg-wrap">';

                                                // Format the price in the desired format with a random range
                                                // $formattedPrice = formatPrice($row['scrap_category_price']);

                                                $formattedPrice = formatPrice($row['avg_price']);
                                                echo '<p class="text-dark fs-8 fw-bold mb-0">' . $formattedPrice . '</p>';

                                                echo '</div>';
                                                echo '</div>';
                                            } ?>
                                        </div>
                                    </div>
                                    <!--div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->

                                    <!--Origanal for feture use-->
                                    <!--div class="col-md-6 col-lg-3 col-xl-2">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h5>Raspberries</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <!-- <img src="img/SCRAP_ICON_IMAGE/news_paper.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                                                <img src="img/SCRAP_IMAGE/home_appliances.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                <h5>Home Appliances</h5>
                                                <!--p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p-->
                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <p class="text-dark fs-8 fw-bold mb-0 ">RS -</p>
                                                    <!--a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/SCRAP_IMAGE/WINDOW_AC2.avif" class="img-fluid w-100 rounded-top" alt="">
                                            </div> -->
                                    <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                    <!-- <div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                <h5>WINDOW AC </h5> -->
                                    <!--p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p-->
                                    <!-- <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0 ">RS 15-17 / kg</p> -->
                                    <!--a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a-->
                                    <!-- </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">

                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/SCRAP_ICON_IMAGE/news_paper.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                <h5>New Papers</h5>
                                                <!--p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p-->
                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0 ">RS 15 / kg</p>
                                                    <!--a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3 col-xl-2">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/SCRAP_ICON_IMAGE/news_paper.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <!--div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div-->
                                            <div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                <h5>New Papers</h5>
                                                <!--p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p-->
                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0 ">RS 15 / kg</p>
                                                    <!--a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Scrap Rate End-->


                    <!-- How it works with image Start -->
                    <!--div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border border-secondary">
                                <img src="img/SCRAP_ICON_IMAGE/Schedule_pickup.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded"-->
                    <!--h5 class="text-white">Fresh Apples</h5-->
                    <!--h3 class="mb-0">Schedule a pickup</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-dark rounded border border-dark">
                                <img src="img/SCRAP_ICON_IMAGE/pickup _at_your_address.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-light text-center p-4 rounded"-->
                    <!--h5 class="text-primary">Tasty Fruits</h5-->
                    <!--h3 class="mb-0">Pickup at your address</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-primary rounded border border-primary">
                                <img src="img/SCRAP_ICON_IMAGE/Receive_payment_2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-secondary text-center p-4 rounded"-->
                    <!--h5 class="text-white">Exotic Vegitable</h5-->
                    <!--h3 class="mb-0">Receive payment</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div-->
                    <!-- How it works with image End -->


                    <!-- Banner Section Start-->
                    <div class="container-fluid bg-secondary my-5" id="why-us">
                        <div class="container py-5">

                            <div class="row g-4 justify-content-center">
                                <h1 class="display-3 text-white">Why us?</h1>
                                <div class="col-md-6 col-lg-6 col-xl-4">

                                    <div class="counter bg-white rounded p-5">
                                        <!--i class="fa fa-users text-secondary"></i-->
                                        <!--i class="fa fa-rupee-sign text-secondary"></i-->
                                        <h5>Best Rates</h5>
                                        <p class="mb-0">We provide the best value for your scrap from our network of Recyclers.</p>

                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">

                                    <div class="counter bg-white rounded p-5">
                                        <!--i class="fa fa-users text-secondary"></i-->
                                        <h5>Convenience</h5>
                                        <p class="mb-0">Doorstep pickup according to user's convenient date & time.</p>

                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6 col-xl-4">

                                    <div class="counter bg-white rounded p-5">
                                        <!--i class="fa fa-users text-secondary"></i-->
                                        <h5>Trust</h5>
                                        <p class="mb-0">Accurate Digital Weighing</p>

                                    </div>

                                </div>

                                <!--div class="col-md-6 col-lg-6 col-xl-4">
                            
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h5>Schedule a pickup</h5>
                                <p class="mb-0">We provide the best value for your scrap from our network of Recyclers.</p>
                            
                            </div>
                            
                        </div-->

                                <!--div class="col-lg-6">
                        <div class="position-relative">
                            <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">50$</span>
                                    <span class="h4 text-muted mb-0">kg</span>
                                </div>
                            </div>
                        </div>
                    </div-->
                            </div>
                        </div>
                    </div>
                    <!-- Banner Section End -->


                    <!-- Top scrap collector Start -->
                    <div class="container-fluid py-5" id="top-scrap-collectors">
                        <div class="container py-5">
                            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                                <h1 class="display-4">Top Scrap Collectors</h1>
                                <!--p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p-->
                            </div>




                            <div class="row g-4 justify-content-center">
                                <?php

                                $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $querySC = "select * from tbl_scrap_collector";
                                $query_run = mysqli_query($conn, $querySC);
                                $check_scrap_collector = mysqli_num_rows($query_run) > 0;

                                if ($check_scrap_collector) {
                                    while ($row = mysqli_fetch_array($query_run)) {
                                ?>
                                        <div class="col-lg-8 col-xl-6 py-4">
                                            <div class="p-4 rounded bg-light">

                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <a href="CustomerDash/index.php">
                                                            <img src="vendors/images/<?php echo $row['scrap_collector_image']; ?>" class="img-fluid rounded-circle w-100" alt="">
                                                        </a>
                                                        <!-- <img src="img/SCRAP_ICON_IMAGE/scrap_collector_profile.avif" class="img-fluid rounded-circle w-100" alt=""> -->
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="CustomerDash/index.php" class="h2"><?php echo $row['scrap_collector_name']; ?></a><br>
                                                        <a href="CustomerDash/index.php" class="h6"><?php echo $row['scrap_collector_address']; ?></a>

                                                        <div class="d-flex my-3 justify-content-center">
                                                            <i class="fas fa-star text-danger"></i>
                                                            <i class="fas fa-star text-danger"></i>
                                                            <i class="fas fa-star text-danger"></i>
                                                            <i class="fas fa-star text-danger"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <!--h4 class="mb-3">3.12 $</h4-->
                                                        <a href="CustomerDash/index.php" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-eye me-2 text-danger"></i> View Profile</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                <?php
                                        // echo $row['scrap_collector_name'];
                                    }
                                } else {
                                    echo "Scrap Collector Not Found!";
                                }
                                ?>
                            </div>







                            <!--Oriznal copy-->
                            <!--div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-6.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div-->

                        </div>
                    </div>
                </div>
                <!-- Top scrap collector End -->


                <!-- Fact Start -->
                <!--div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
                <!-- Fact Start -->


                <!-- Tastimonial Start -->
                <!--div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
                <!-- Tastimonial End -->


                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
                    <div class="container py-5">
                        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <a href="#">
                                        <h1 class="text-primary mb-0">The</h1>
                                        <h4 class="text-secondary mb-0">Scrap Service</h4>
                                        <!--p class="text-secondary mb-0">Scrap Service</p-->
                                    </a>
                                </div>

                                <div class="col-lg-3">
                                    <div class="d-flex justify-content-end pt-3">
                                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-item">
                                    <h4 class="text-light mb-3">Why People Like us!</h4>
                                    <p class="mb-4">We provide the best value for your scrap from our network of Recyclers.</p>
                                    <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex flex-column text-start footer-item">
                                    <h4 class="text-light mb-3">TSS Info</h4>
                                    <a class="btn-link" href="">About Us</a>
                                    <a class="btn-link" href="">Contact Us</a>
                                    <a class="btn-link" href="">Privacy Policy</a>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex flex-column text-start footer-item">
                                    <h4 class="text-light mb-3">Account</h4>
                                    <a class="btn-link" href="">My Account</a>
                                    <a class="btn-link" href="">Order History</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-item">
                                    <h4 class="text-light mb-3">Contact</h4>
                                    <p>Address: 394620 Maliba campus, Mahuva-Bardoli Rd</p>
                                    <p>Email: thescrapservice.18@gmail.com</p>
                                    <p>Phone: +91 63526 97585</p>
                                    <!--p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt=""-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                <!-- Copyright Start -->
                <div class="container-fluid copyright bg-dark py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>The Scrap Service</a>, All right reserved.</span>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Copyright End -->



                <!-- Back to Top -->
                <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


                <!-- JavaScript Libraries -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/lightbox/js/lightbox.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <!-- Template Javascript -->
                <script src="js/main.js"></script>
</body>

</html>