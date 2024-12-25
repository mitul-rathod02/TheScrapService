<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: ../index.php");
    //echo "<script>window.location='../index.php';</script>";

    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>The Scrap Service</title>

    <!-- Site favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="../vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../vendors/logo/Scrap_service.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>



    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>

        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <!-- <img src="../vendors/images/photo1.jpg" alt="" /> -->
                        </span>
                        <span class="user-name"><?php echo $_SESSION['user_id']; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
                        <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
                        <a class="dropdown-item" href="../logout.php"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>


                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.php">
                <!--img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/-->
                <h3>TSS</h3>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <!--li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-house"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="index.html">Dashboard</a></li>
							<!--li><a href="index2.html">Dashboard style 2</a></li>
								<li><a href="index3.html">Dashboard style 3</a></li-->
                    <!--/ul>
					</li-->
                    <li>
                        <a href="index.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="scrap_collector.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person-fill"></span><span class="mtext">View Scrap Collector</span>
                        </a>
                    </li>

                    <li>
                        <a href="invoice1.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Download Invoice</span>
                        </a>
                    </li>

                    <li>
                        <a href="feedback.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-star-fill"></span><span class="mtext">Feedback</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>View Scrap Collector Profile</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Profile
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                        <?php

                        $sid = $_GET['sid'];

                        ?>
                            <?php
                            // $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

                            // if (!$conn) {
                            //     die("Connection failed: " . mysqli_connect_error());
                            // }


                            // $querySC = "select * from tbl_scrap_collector1 where scrap_collector_name = 'Akash Patel'";

                            require("../db/DBConnection.php");

                            $querySC = "select * from tbl_scrap_collector where scrap_collector_id = '$sid'";
                            $query_run = mysqli_query($conn, $querySC);
                            $check_scrap_collector = mysqli_num_rows($query_run) > 0;

                            if ($check_scrap_collector) {
                                while ($row = mysqli_fetch_array($query_run)) {

                            ?>
                                    <div class="pd-20 card-box mb-30">
                                        <div class="profile-photo">
                                            <!--a
										href="modal"
										data-toggle="modal"
										data-target="#modal"
										class="edit-avatar"
										><i class="fa fa-pencil"></i
									></a-->
                                            <!-- <img src="../vendors/images/photo1.jpg" alt="" class="avatar-photo" /> -->

                                            <img src="../vendors/images/<?php echo $row['scrap_collector_image']; ?>" alt="" class="avatar-photo" />
                                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <!--div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img id="image" src="vendors/images/photo2.jpg" alt="Picture"/>
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" value="Update" class="btn btn-primary"/>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div-->
                                            </div>
                                        </div>
                                        <h5 class="text-center h5 mb-0"><?php echo $row['scrap_collector_name']; ?></h5>
                                        <!--p class="text-center text-muted font-14">
									Lorem ipsum dolor sit amet
								</p-->
                                        <div class="profile-info">
                                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                            <ul>
                                                <li>
                                                    <span>Email Address:</span>
                                                    <?php echo $row['scrap_collector_email']; ?>
                                                </li>
                                                <li>
                                                    <span>Phone Number:</span>
                                                    <?php echo $row['scrap_collector_mobile']; ?>
                                                </li>
                                                <!--li>
											<span>Country:</span>
											America
										</li-->
                                                <li>
                                                    <span>Address:</span>
                                                    <?php echo $row['scrap_collector_address']; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Social media icons Facebook etc -->
                                        <!-- <div class="profile-social">
                                    <h5 class="mb-20 h5 text-blue">Social Links</h5>
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i
                                                    class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i
                                                    class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i
                                                    class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>

                                    </ul>
                                </div> -->
                                        <div class="profile-skills">
                                            <!--h6 class="mb-5 font-14">HTML</h6>
									<div class="progress mb-20" style="height: 6px">
										<div
											class="progress-bar"
											role="progressbar"
											style="width: 90%"
											aria-valuenow="0"
											aria-valuemin="0"
											aria-valuemax="100"
										></div>
									</div>
									<h6 class="mb-5 font-14">Css</h6>
									<div class="progress mb-20" style="height: 6px">
										<div
											class="progress-bar"
											role="progressbar"
											style="width: 70%"
											aria-valuenow="0"
											aria-valuemin="0"
											aria-valuemax="100"
										></div>
									</div-->

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


                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="pd-20 card-box mb-30">
                                <div class="clearfix">
                                    <h4 class="text-blue h4">Book Order</h4>
                                    <p class="mb-30">Sell Your Scrap</p>
                                </div>
                                <div class="wizard-content">
                                    <form class="tab-wizard wizard-circle" id="orderForm" method="POST">


                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "mca_tss");

                                        if (!$conn) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }
                                        $querySC = "SELECT * FROM tbl_customer WHERE customer_id = '{$_SESSION['user_id']}'";

                                        //$querySC = "select * from tbl_customer where customer_name='Animesh Pandey'";
                                        $query_run = mysqli_query($conn, $querySC);
                                        $check_customer = mysqli_num_rows($query_run) > 0;

                                        if ($check_customer) {
                                            while ($row = mysqli_fetch_array($query_run)) {

                                        ?>
                                                <h5>Personal Info</h5>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name :</label>
                                                                <input type="text" class="form-control" name="customer_name" required readonly value="<?php echo $row['customer_name']; ?>" />
                                                            </div>
                                                        </div>
                                                        <!--div class="col-md-6">
														<div class="form-group">
															<label>Last Name :</label>
															<input type="text" class="form-control" />
														</div>
													</div-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email Address :</label>
                                                                <input type="email" value="<?php echo $row['customer_email']; ?>" class="form-control" inputmode="email" name="customer_email" required readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number :</label>
                                                                <input type="text" class="form-control" value="<?php echo $row['customer_mobile']; ?>" inputmode="tel" name="customer_mobile" required readonly />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Alternative Phone Number :</label>
                                                                <input type="text" value="<?php echo $row['customer_alternate_mobile']; ?>" class="form-control" inputmode="tel" name="customer_alt_mobile" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Address :</label>
                                                                <input type="text" value="<?php echo $row['customer_address']; ?>" class="form-control" name="customer_address" required />
                                                            </div>
                                                        </div>
                                                        <!--div class="col-md-6">
														<div class="form-group">
															<label>Select City :</label>
															<select class="custom-select form-control">
																<option value="">Select City</option>
																<option value="Amsterdam">India</option>
																<option value="Berlin">UK</option>
																<option value="Frankfurt">US</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of Birth :</label>
															<input
																type="text"
																class="form-control date-picker"
																placeholder="Select Date"
															/>
														</div>
													</div-->
                                                    </div>
                                                </section>
                                                <!-- Step 2 -->
                                                <h5>Select Scrap</h5>

                                                <section>
                                                    <label class="weight-600">Select your scrap to sell </label>
                                                    <br /><br />
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!--label class="weight-600">Select your scrap to sell </label-->
                                                            <div  class="form-group">
                                                                <label>Scrap item you want to sell :</label>
                                                                <input type="text" value="" placeholder="ex : paper, plastic .." class="form-control" name="scrapitem" required />
                                                            </div>
                                                        </div>
                                                        <div  class="col-md-6">
                                                            <div  class="form-group">
                                                                <label>Approx weight of scrap :</label>
                                                                <input type="text" value="" placeholder="ex : 10kg" class="form-control" name="scrapweight" required />
                                                            </div>
                                                        </div>
                                                 
                                                        <!--div class="col-md-6 col-sm-12">


													<label class="weight-600">Custom Radio</label>
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="customRadio1" name="customRadio"
															class="custom-control-input" />
														<label class="custom-control-label" for="customRadio1">Toggle
															this custom radio</label>
													</div>
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="customRadio2" name="customRadio"
															class="custom-control-input" />
														<label class="custom-control-label" for="customRadio2">Or toggle
															this other custom radio</label>
													</div>
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="customRadio3" name="customRadio"
															class="custom-control-input" />
														<label class="custom-control-label" for="customRadio3">Or toggle
															this other custom radio</label>
													</div>
												</div-->


                                                        <!--div class="col-md-6">
														<div class="form-group">
															<label>Job Title :</label>
															<input type="text" class="form-control" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Company Name :</label>
															<input type="text" class="form-control" />
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label>Job Description :</label>
															<textarea class="form-control"></textarea>
														</div>
													</div-->
                                                    </div>
                                                </section>
                                                <!-- Step 3 -->
                                                <h5>Select Date & Time</h5>
                                                <section>
                                                    <div class="row">
                                                        <!--div class="col-md-6">
													<div class="form-group">
														<label>Interview For :</label>
														<input type="text" class="form-control" />
													</div>
													<div class="form-group">
														<label>Interview Type :</label>
														<select class="form-control">
															<option>Normal</option>
															<option>Difficult</option>
															<option>Hard</option>
														</select>
													</div>
												</div-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Pickup Date :</label>
                                                                <input type="text" class="form-control date-picker" placeholder="Select Date" name="date" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Pickup Time :</label>
                                                                <input class="form-control time-picker" placeholder="Select time" type="text" name="time" required />
                                                            </div>

                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <p id="demo"></p>
                                                                <input type="hidden" name="latitude" id="latitude">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="hidden" name="longitude" id="longitude">
                                                        </div>
                                                        
                                                        </div>
                                                        <!-- <div class="modal-footer">
                                                            <input type="submit" value="Book order" name="submitorder" class="btn btn-primary" />
                                                        </div> -->

                                                        <!-- for location -->

                                                        <script>
                                                            const x = document.getElementById("demo");

                                                            function getLocation() {
                                                                if (navigator.geolocation) {
                                                                    navigator.geolocation.getCurrentPosition(showPosition);
                                                                } else {
                                                                    x.innerHTML = "Geolocation is not supported by this browser."
                                                                }
                                                            }

                                                            function showPosition(position) {
                                                                const latitude = position.coords.latitude;
                                                                const longitude = position.coords.longitude;

                                                                // Display latitude and longitude
                                                                x.innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;

                                                                // Store latitude and longitude in hidden fields
                                                                document.getElementById("latitude").value = latitude;
                                                                document.getElementById("longitude").value = longitude;
 
                                                                // Submit the form
                                                                document.getElementById("orderForm").submit();
                                                            }
                                                        </script>

                                                        <!--<div class="modal-footer">
                                                            <input type="submit" value="Update" class="btn btn-primary" />
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div> -->
                                                    </div>
                                                </section>
                                                <!-- Step 4 -->
                                                <!--h5>Remark</h5>
										<section>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Behaviour :</label>
														<input type="text" class="form-control" />
													</div>
													<div class="form-group">
														<label>Confidance</label>
														<input type="text" class="form-control" />
													</div>
													<div class="form-group">
														<label>Result</label>
														<select class="form-control">
															<option>Select Result</option>
															<option>Selected</option>
															<option>Rejected</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Comments</label>
														<textarea class="form-control"></textarea>
													</div>
												</div>
											</div>
										</section-->


                                        <?php
                                                // echo $row['scrap_collector_name'];
                                            }
                                        } else {
                                            echo "Customer Not Found!";
                                        }
                                        ?>

                                    </form>
                                </div>
                            </div>

                            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-center font-18">
                                            <h3 class="mb-20">Order Submitted!</h3>
                                            <div class="mb-30 text-center">
                                                <img src="../vendors/images/success.png" />
                                            </div>
                                            Order successfully done!
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <!-- for location i add getLocation -->
                                            <button type="button" onclick="getLocation()" name="submitorder" class="btn btn-primary" data-dismiss="modal">
                                                Done
                                            </button>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- success Popup html End -->
                </div>



                <?php
// Include the database connection file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca_tss";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submitorder'])) {
    // Retrieve form data
    $customer_id = $_SESSION['user_id'];  // Make sure session variable is set
    $orderdte = $_POST['date'];  // Pickup Date
    $ordertime = $_POST['time'];  // Pickup Time
    $scrqapweight = $_POST['scrapweight'];  // Scrap weight
    $scrapitem = $_POST['scrapitem'];  // Scrap item name
    $latitude = $_POST['latitude'];  // Latitude from geolocation
    $longitude = $_POST['longitude'];  // Longitude from geolocation

    // Assuming you have a way to fetch the scrap collector's ID
    $sid = 1; // This should be dynamically set based on your logic (e.g., logged-in user's ID or a fixed ID)

    // SQL query to insert data
    $sql = "INSERT INTO tbl_booking_info(customer_id, scrap_collector_id, scrap_category, scrap_weight_kg, scheduled_date, scheduled_time, customer_longitude, customer_latitude)
            VALUES ('$customer_id', '$sid', '$scrapitem', '$scrqapweight', '$orderdte', '$ordertime', '$longitude', '$latitude')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order added successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

        
                /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Include database connection code here

                    // Check if latitude and longitude values are received
                    if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
                        $latitude = $_POST['latitude'];
                        $longitude = $_POST['longitude'];

                        // Insert latitude and longitude into the database
                        $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $query = "UPDATE tbl_booking_info SET latitude=$latitude, longitude=$longitude WHERE customer_id='animesh'";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo "Location stored successfully.";
                        } else {
                            echo "Error storing location: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                    } else {
                        echo "Latitude and Longitude values are not received.";
                    }
                }*/


                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //     // Check if latitude and longitude values are received
                //     if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
                //         $latitude = $_POST['latitude'];
                //         $longitude = $_POST['longitude'];


                //         // Check connection
                //         if ($conn->connect_error) {
                //             die("Connection failed: " . $conn->connect_error);
                //         }

                //         // Prepare the SQL query with placeholders to prevent SQL injection
                //         $query = "UPDATE tbl_booking_info SET latitude=?, longitude=? WHERE customer_id=?";

                //         // Prepare the statement
                //         $stmt = $conn->prepare($query);

                //         // Bind parameters
                //         $customer_id = $_SESSION['user_id']; // Assuming customer_id is a string
                //         $stmt->bind_param("dds", $latitude, $longitude, $customer_id);

                //         // Execute the statement
                //         if ($stmt->execute()) {
                //             echo "Location stored successfully.";
                //         } else {
                //             echo "Error storing location: " . $conn->error;
                //         }

                //         // Close statement and connection
                //         $stmt->close();
                //         $conn->close();
                //     } else {
                //         echo "Latitude and Longitude values are not received.";
                //     }
                // }
                // ?>




            </div>

            <!-- <div class="footer-wrap pd-20 mb-20 card-box">
                TSS - The Scrap Service
                <a href="#" target="_blank">MCA2_04</a>
            </div> -->
        </div>
    </div>



    <!-- locatuin end -->


    <!-- welcome modal end -->
    <!-- js -->
    <script src="../vendors/scripts/core.js"></script>
    <script src="../vendors/scripts/script.min.js"></script>
    <script src="../vendors/scripts/process.js"></script>
    <script src="../vendors/scripts/layout-settings.js"></script>
    <script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="../vendors/scripts/steps-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>