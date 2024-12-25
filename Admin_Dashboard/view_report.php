<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
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
    <title>The Scrap Service - Dashboard</title>

    <!-- Site favicon -->
    <!--link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/-->
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
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <!--div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<!--img src="vendors/images/deskapp-logo.svg" alt="" /-->
    <!--img src="vendors/logo/Scrap_service.svg" width="50%" height="50%" alt="" />

				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div-->

    <div class="header">

        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" id="search" placeholder="Search Scrap Collector Name or City" />

                    </div>
                </form>
            </div>
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
                        <span class="user-name">
                            <?php echo $_SESSION['admin_id']; ?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a> -->
                        <!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
                        <a class="dropdown-item" href="../admin_logout.php"><i class="dw dw-logout"></i> Log Out</a>
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
                        <a href="view_scrap_collector.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person-fill"></span><span class="mtext">View Scrap
                                Collector</span>
                        </a>
                    </li>

                    <li>
                        <a href="view_customer.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person-fill"></span><span class="mtext">View Customer</span>
                        </a>
                    </li>

                    <li>
                        <a href="view_report.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-bar-chart-line-fill"></span><span class="mtext">View Report</span>
                        </a>
                    </li>
                    <!-- <li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-star-fill"></span><span class="mtext">Rating</span>
						</a>
					</li>

					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Download
								Invoice</span>
						</a>
					</li> -->


                    <!--li>
						<a href="scrap_collector.html" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-person-fill"></span><span class="mtext">View Scrap
								Collector</span>
						</a>
					</li-->



                    <li>
                        <div class="dropdown-divider"></div>
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
                                <h4>Dashboard</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Report
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Select scrap collector Start -->
                <!-- <div class="pd-20 card-box mb-30">

                    <form method="post">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-12 col-md-4 col-form-label">Scrap Collector</label>
                                    <div class="col-sm-12 col-md-8">
                                        <select class="custom-select form-control" name="scrap_category" required>
                                            <option value="">Select Scrap Collector</option>
                                            <?php
                                            // Include the database connection file
                                            /*  include '../db/DBConnection.php';

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
                                                echo '<option value="">No Scrap Categories Found</option>';
                                            }

                                            // Close the database connection
                                            mysqli_close($conn);*/
                                            ?>

                                        </select>
                                       /div>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="btn-list pd-30">
                                        <button type="submit" class="btn btn-outline-primary" name="btn_Scrap_Col" id="btn_Scrap_Col">
                                            <span class="micon bi bi-plus-lg" style="font-size: 100%;  font-weight: bold;"></span>&nbsp;View
                                        </button>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div> -->
                <!-- Select scrap collector end -->

                <div class="bg-white pd-20 card-box mb-30">
                    <h4 class="h4 text-blue">Scrap Report</h4>
                    <div id="chart3"></div>
                </div>



            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca_tss";

$conn = new mysqli($servername, $username, $password, $dbname);

    // Perform database query
    $query = "SELECT sc.scrap_collector_name AS scrap_collector_name,msc.scrap_category_name AS scrap_category_name,bi.scrap_weight_kg 
    AS scrap_weight_kg FROM tbl_booking_info bi LEFT JOIN tbl_scrap_collector sc ON bi.scrap_collector_id = sc.scrap_collector_id
    LEFT JOIN master_scrap_categories msc ON bi.scrap_category = msc.scrap_category_id";

    $result = $conn->query($query);
    //echo print_r($result);
    // Prepare arrays to hold data for chart
    $scrap_collectors = [];
    $scrap_categories = [];
    $scrap_weights = [];

    if ($result->num_rows > 0) {
        // Fetch data and store in arrays
        while ($row = $result->fetch_assoc()) {
            $scrap_collectors[] = $row['scrap_collector_name'];
            $scrap_categories[] = $row['scrap_category_name'];
            $scrap_weights[] = $row['scrap_weight_kg'];
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        var options3 = {
            series: [{
                name: 'Scrap Weight',
                data: <?php echo json_encode($scrap_weights); ?>
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '25%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo json_encode($scrap_collectors); ?>,
            },
            yaxis: {
                title: {
                    text: 'Scrap Weight (Kgs)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " Kgs";

                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart3"), options3);
        chart.render();
    </script>




    <!-- js -->
    <script src="../vendors/scripts/core.js"></script>
    <script src="../vendors/scripts/script.min.js"></script>
    <script src="../vendors/scripts/process.js"></script>
    <script src="../vendors/scripts/layout-settings.js"></script>
    <!-- <script src="../src/plugins/apexcharts/apexcharts.min.js"></script> -->
    <!-- <script src="../vendors/scripts/apexcharts-setting.js"></script> -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>