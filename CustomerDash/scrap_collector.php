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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
						<!-- <div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div> -->
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

					<!--li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon bi bi-house"></span
									><span class="mtext"><a href="scrap_collector.html">Scrap Collector</a></span>
								</a>
								<ul class="submenu">
									<li><a href="scrap_collector.html">View</a></li>
									<!--li><a href="index2.html">Dashboard style 2</a></li>
									<li><a href="index3.html">Dashboard style 3</a></li-->
					<!--/ul>
							</li-->

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
				<div class="container pd-0">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>List Of Scrap Collector</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Scrap Collector
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>



					<div class="contact-directory-list">


						<ul class="row" style="display: flex;">
							<?php
							// $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

							// if (!$conn) {
							// 	die("Connection failed: " . mysqli_connect_error());
							// }

							require("../db/DBConnection.php");

							$querySC = "select * from tbl_scrap_collector";
							$query_run = mysqli_query($conn, $querySC);
							$check_scrap_collector = mysqli_num_rows($query_run) > 0;

							if ($check_scrap_collector) {
								while ($row = mysqli_fetch_array($query_run)) {

							?>
									<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
										<div class="contact-directory-box">

											<div class="contact-dire-info text-center">
												<div class="contact-avatar">
													<span>
														<!-- <img src="../vendors/images/photo2.jpg" alt="" /> -->

														<img src="../vendors/images/<?php echo $row['scrap_collector_image']; ?>" alt="" />
													</span>
												</div>
												<div class="contact-name">
													<h4><?php echo $row['scrap_collector_name']; ?></h4>
													<!--p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div-->
													<!-- <div class="profile-sort-desc">
														Lorem ipsum dolor sit amet, consectetur adipisicing
														magna aliqua.
													</div> -->
												</div><br>
												<div class="view-contact">
													<a href="book_order.php?sid=<?php echo $row['scrap_collector_id']; ?>">View Profile</a>
												</div>
											</div>
									</li>

							<?php
									// echo $row['scrap_collector_name'];
								}
							} else {
								echo "Scrap Collector Not Found!";
							}
							?>
						</ul>


					</div>

				</div>
			</div>
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				TSS - The Scrap Service
				<a href="#" target="_blank">MCA2_04</a>
			</div> -->
		</div>
	</div>


	<!-- For search functionality -->
	<!-- <div id="search-results"></div> -->

	<script>
		$(document).ready(function() {
			$('#search').keyup(function() {
				var query1 = $(this).val();

				$.ajax({
					url: 'search.php', // PHP script to handle search
					method: 'POST',
					data: {
						query1: query1
					},
					success: function(data) {
						$('.contact-directory-list ul').html(data); // Update ul with search results
					}
				});
			});
		});
	</script>




	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendors/scripts/dashboard3.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>