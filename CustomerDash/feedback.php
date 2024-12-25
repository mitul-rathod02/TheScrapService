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

        <!-- Select-2 Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Customer Feedback</h4>
                    <!-- <p class="mb-30">Add your scrap category and rate</p> -->
                </div>
            </div>
            <form method="post">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-12 col-md-4 col-form-label"> Scrap Collector</label>
                            <div class="col-sm-12 col-md-8">
                                <select class="custom-select form-control" name="scrap_category" required>
                                    <option value="">Select Scrap Collector</option>
                                    <?php
                                    // Include the database connection file
                                    include '../db/DBConnection.php';

                                    // SQL query to fetch scrap categories
                                    $sql = "SELECT scrap_collector_id, scrap_collector_name FROM tbl_scrap_collector";

                                    // Execute the query
                                    $result = mysqli_query($conn, $sql);

                                    // Check if there are any records
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop through each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Output option tag for each scrap category
                                            echo '<option value="' . $row['scrap_collector_id'] . '">' . $row['scrap_collector_name'] . '</option>';
                                        }
                                    } else {
                                        // If no categories found
                                        echo '<option value="">No Scrap Collector Found</option>';
                                    }

                                    // Close the database connection
                                    mysqli_close($conn);
                                    ?>

                                </select>
                                <!-- <input class="form-control" name="scrap_category" id="scrap_category" type="text" onkeyup="lettersonly(this)" required maxlength="50" pattern="[A-Z][a-z]+" title="Scrap category should only contain Characters maximum length is 50" /> -->
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-12 col-md-4 col-form-label">Feedback</label>
                            <div class="col-sm-12 col-md-8 col-2">
                                <!-- <input class="form-control" name="scrap_rate" type="number" id="scrap_rate" required placeholder="E.g. 10.00" /> -->

                                <textarea class="form-control" name="feedback" type="text" id="feedback" required placeholder="Write your feedback here..."></textarea>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="btn-list pd-10">
                                <button type="submit" class="btn btn-outline-primary" name="btn_Add_Feedback" id="btn_Add_Feedback">
                                    <span class="micon bi bi-plus-lg" style="font-size: 100%;  font-weight: bold;"></span>&nbsp;Give Feedback
                                </button>


                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <!-- Select-2 end -->
    </div>


    <?php


    // Include the database connection file
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mca_tss";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the form is submitted
    if (isset($_POST['btn_Add_Feedback'])) {
        // Retrieve form data
        $scrap_collector_id = $_POST['scrap_category'];
        $feedback = $_POST['feedback'];
        $customer_id = $_SESSION['user_id'];
        $feedback_date = date('Y-m-d'); // Current date

        // SQL query to insert feedback into tbl_feedback table
        $sql = "INSERT INTO tbl_feedback (customer_id, scrap_collector_id, feedback, feedback_date) 
            VALUES ('$customer_id', '$scrap_collector_id', '$feedback', '$feedback_date')";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Feedback added successfully.')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
    ?>

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