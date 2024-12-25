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
    <link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png" />

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

                    <li>
                        <a href="index.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="scrap_collector.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person-fill"></span><span class="mtext">View Scrap
                                Collector</span>
                        </a>
                    </li>


                    <li>
                        <a href="invoice.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Download
                                Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-star-fill"></span><span class="mtext">Rating</span>
                        </a>
                    </li>

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
                                <h4>Download Invoice</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Invoice
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <!--div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div-->
                    </div>
                </div>


                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Invoice</h4>
                    </div>
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">



                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Sr.No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th>Scrap Category</th>
                                    <th>Scrap Rate(KGs)</th>
                                    <th>Total(Rs.)</th>
                                </tr>

                                <!--tr>
                                    <th class="table-plus datatable-nosort">
                                        <div class="invoice-wrap">
                                            <div class="invoice-box">
                                                <div class="invoice-header">
                                                    <div class="logo text-center">
                                                        <img src="vendors/images/deskapp-logo.png" alt="" />
                                                    </div>
                                                </div>
                                                <h4 class="text-center mb-30 weight-600">INVOICE</h4>
                                                <div class="row pb-30">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-15">Client Name</h5>
                                                        <p class="font-14 mb-5">
                                                            Date Issued: <strong class="weight-600">10 Jan 2018</strong>
                                                        </p>
                                                        <p class="font-14 mb-5">
                                                            Invoice No: <strong class="weight-600">4556</strong>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </th>
                                </tr-->
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">1</td>
                                    <td>Chirag</td>
                                    <td>Bardoli</td>
                                    <td>10 March 2024</td>
                                    <td>Books</td>
                                    <td>10 Rs</td>
                                    <td>552 Rs</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">2</td>
                                    <td>Hiren</td>
                                    <td>Surat</td>
                                    <td>11 March 2024</td>
                                    <td>Plastic</td>
                                    <td>12 Rs</td>
                                    <td>658 Rs</td>
                                </tr>

                                <tr>

                                    <td class="table-plus" colspan="6" style="text-align: right; font-weight: bold;">Total</td>
                                    <td><b>1000 Rs</b></td>

                                </tr>
                                <tr>

                                    <td class="table-plus" colspan="6" style="text-align: right; font-weight: bold;"><button onclick="printTable()">Print</button></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with Export Buttons</h4>
                    </div>
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Name</th>
                                    <th>Age</th>
                                    <th>Office</th>
                                    <th>Address</th>
                                    <th>Start Date</th>
                                    <th>Salart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>25</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>18</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->

                <div class="invoice-wrap">
                    <div class="invoice-box">
                        <div class="invoice-header">
                            <div class="logo text-center">
                                <img src="../vendors/images/deskapp-logo.png" alt="" />
                            </div>
                        </div>
                        <h4 class="text-center mb-30 weight-600">INVOICE</h4>
                        <div class="row pb-30">
                            <div class="col-md-6">
                                <h5 class="mb-15">Client Name</h5>
                                <p class="font-14 mb-5">
                                    Date Issued: <strong class="weight-600">10 Jan 2018</strong>
                                </p>
                                <p class="font-14 mb-5">
                                    Invoice No: <strong class="weight-600">4556</strong>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="text-right">
                                    <p class="font-14 mb-5">Your Name</p>
                                    <p class="font-14 mb-5">Your Address</p>
                                    <p class="font-14 mb-5">City</p>
                                    <p class="font-14 mb-5">Postcode</p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-desc pb-30">
                            <div class="invoice-desc-head clearfix">
                                <div class="invoice-sub">Description</div>
                                <div class="invoice-rate">Rate</div>
                                <div class="invoice-hours">Hours</div>
                                <div class="invoice-subtotal">Subtotal</div>
                            </div>
                            <div class="invoice-desc-body">
                                <ul>
                                    <li class="clearfix">
                                        <div class="invoice-sub">Website Design</div>
                                        <div class="invoice-rate">$20</div>
                                        <div class="invoice-hours">100</div>
                                        <div class="invoice-subtotal">
                                            <span class="weight-600">$2000</span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="invoice-sub">Logo Design</div>
                                        <div class="invoice-rate">$20</div>
                                        <div class="invoice-hours">100</div>
                                        <div class="invoice-subtotal">
                                            <span class="weight-600">$2000</span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="invoice-sub">Website Design</div>
                                        <div class="invoice-rate">$20</div>
                                        <div class="invoice-hours">100</div>
                                        <div class="invoice-subtotal">
                                            <span class="weight-600">$2000</span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="invoice-sub">Logo Design</div>
                                        <div class="invoice-rate">$20</div>
                                        <div class="invoice-hours">100</div>
                                        <div class="invoice-subtotal">
                                            <span class="weight-600">$2000</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="invoice-desc-footer">
                                <div class="invoice-desc-head clearfix">
                                    <div class="invoice-sub">Bank Info</div>
                                    <div class="invoice-rate">Due By</div>
                                    <div class="invoice-subtotal">Total Due</div>
                                </div>
                                <div class="invoice-desc-body">
                                    <ul>
                                        <li class="clearfix">
                                            <div class="invoice-sub">
                                                <p class="font-14 mb-5">
                                                    Account No:
                                                    <strong class="weight-600">123 456 789</strong>
                                                </p>
                                                <p class="font-14 mb-5">
                                                    Code: <strong class="weight-600">4556</strong>
                                                </p>
                                            </div>
                                            <div class="invoice-rate font-20 weight-600">
                                                10 Jan 2018
                                            </div>
                                            <div class="invoice-subtotal">
                                                <span class="weight-600 font-24 text-danger">$8000</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center pb-20">Thank You!!</h4>
                    </div>
                </div>
            </div>
            <!-- <div class="footer-wrap pd-20 mb-20 card-box">
                TSS - The Scrap Service
                <a href="#" target="_blank">MCA2_04</a>
            </div> -->
        </div>
    </div>
    <script>
        function printTable() {
            var table = document.getElementById("myTable");
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write('<html><head><style>@media print {table {width: 100%;border-collapse: collapse;}td, th {border: 1px solid #000;padding: 8px;}tr:nth-child(even) {background-color: #f2f2f2;}}</style></head><body>' + table.outerHTML + '</body></html>');
            newWin.document.close();
            newWin.print();
            newWin.close();
        }
    </script>
    <!-- welcome modal end -->
    <!-- js -->
    <script src="../vendors/scripts/core.js"></script>
    <script src="../vendors/scripts/script.min.js"></script>
    <script src="../vendors/scripts/process.js"></script>
    <script src="../vendors/scripts/layout-settings.js"></script>
    <script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="../vendors/scripts/datatable-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>