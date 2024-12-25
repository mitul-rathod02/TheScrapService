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

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">

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
						<!-- <span class="user-name">Ross C. Lopez</span> -->
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
						<a href="scrap_category.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-plus-lg"></span><span class="mtext">Add Scrap Category</span>
						</a>
					</li>

					<li>
						<a href="view_order.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-receipt-cutoff"></span><span class="mtext">View Order</span>
						</a>
					</li>
					<li>
						<a href="view_customer.php" class="dropdown-toggle no-arrow">
							<span class="micon  bi bi-people-fill"></span><span class="mtext">View Customer</span>
						</a>
					</li>
					<!-- <li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-star-fill"></span><span class="mtext">Rating</span>
						</a>
					</li> -->

					<li>
						<div class="dropdown-divider"></div>
					</li>


				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>


	<div class="main-container">
		<div class="pd-ltr-20 ">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<!-- <img src="../vendors/images/banner-img.png" alt="" /> -->
						<img src="../img/logo/customer2.avif" width="80%" height="60%" alt="" />

					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back
							<div class="weight-600 font-30 text-blue"><?php echo $_SESSION['user_id']; ?></div>
						</h4>
						<!-- <p class="font-18 max-width-600">
							Sell your scrap online with <b>The Scrap Service!</b>
						</p> -->
					</div>
				</div>
			</div>


			<div class="card-box mb-30">

				<div class="pb-20">
					<h2 class="h4 pd-20">List Of Customers</h2>
					<table class="data-table table stripe hover nowrap">

						<thead>
							<tr>
								<!-- <th class="table-plus datatable-nosort">Profile</th> -->
								<th class="table-plus datatable-nosort">Name</th>

								<!-- <th>Name</th> -->
								<th>Email</th>
								<th>Mobile</th>
								<th>Alternate Mobile</th>
								<th>Address</th>
								<!-- <th>Location</th> -->
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>

						<!-- <thead>
								<tr>
									<th class="table-plus datatable-nosort">Profile<?php //echo $row['scrap_collector_image']; 
																					?></th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Address</th>
									
									
								</tr>
							</thead> -->
						<tbody>
							<?php
							// $conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

							// if (!$conn) {
							// 	die("Connection failed: " . mysqli_connect_error());
							// }

							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "mca_tss";
						
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}

							$querySC = "select * from tbl_customer";
							$query_run = mysqli_query($conn, $querySC);
							$check_scrap_collector = mysqli_num_rows($query_run) > 0;

							if ($check_scrap_collector) {
								while ($row = mysqli_fetch_array($query_run)) {

							?>
									<tr>

										<!-- <td class="table-plus">
										<img src="../vendors/images/<?php //echo $row['scrap_collector_image']; 
																	?>" width="70" height="70" alt="" />
									</td> -->
										<td><?php echo $row['customer_name']; ?></td>
										<td><?php echo $row['customer_email']; ?></td>
										<td><?php echo $row['customer_mobile']; ?></td>
										<td><?php echo $row['customer_alternate_mobile']; ?></td>
										<td><?php echo $row['customer_address']; ?></td>
										<!-- <td>Add Location Lang/Lati<?php //echo $row['customer_location']; 
																		?></td> -->
										<!-- <td>1</td> -->
										<!-- <td><a href="#"><i class="dw dw-eye"></i> View</a></td> -->
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
													<a class="dropdown-item" href="#"><i class="dw bi bi-check2"></i> Accept</a>
													<a class="dropdown-item" href="#"><i class="bi bi-x-lg"></i>Reject</a>
												</div>
											</div>
										</td>

									</tr>

							<?php
									// echo $row['scrap_collector_name'];
								}
							} else {
								echo "Scrap Collector Not Found!";
							}
							?>





							<!-- <tr>
									<td class="table-plus">
										<img src="../vendors/images/photo2.jpg" width="70" height="70" alt="" />
									</td>
									<td>Animesh Pandey</td>
									<td>animesh@gmail.com</td>
									<td>+91 63652 84858</td>
									<td>205, Navsari</td>
									<td><a href="scrap_collector.php"><i class="dw dw-eye"></i> View</a></td> -->
							<!-- <td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
										role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td> -->
							<!-- </tr> -->


						</tbody>
					</table>
				</div>
			</div>





		</div>
	</div>

	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../endors/scripts/process.js"></script>
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