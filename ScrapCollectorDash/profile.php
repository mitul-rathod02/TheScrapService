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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.php">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Update Profile
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Select-2 Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Update Profile</h4>
							<!-- <p class="mb-30">Select2 for custom search and select</p> -->
						</div>
					</div>
					<form method="post">

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
						}						$querySC = "select * from tbl_scrap_collector where scrap_collector_id='" . $_SESSION['user_id'] . "'";
						$query_run = mysqli_query($conn, $querySC);
						$check_customer = mysqli_num_rows($query_run) > 0;

						if ($check_customer) {
							while ($row = mysqli_fetch_array($query_run)) {

						?>
								<div class="row">

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Name</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="name" value="<?php echo isset($row['scrap_collector_name']) ? $row['scrap_collector_name'] : ''; ?>" onkeyup="lettersonly(this)" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Email</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="email" name="email" value="<?php echo isset($row['scrap_collector_email']) ? $row['scrap_collector_email'] : ''; ?>" require />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Mobile Number</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="mobile" value="<?php echo isset($row['scrap_collector_mobile']) ? $row['scrap_collector_mobile'] : ''; ?>" onkeyup="numbersonly(this)" maxlength="10" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Address</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="address" value="<?php echo isset($row['scrap_collector_address']) ? $row['scrap_collector_address'] : ''; ?>" onkeyup="lettersonly(this)" required />
											</div>
										</div>
									</div>
								
									<!-- <div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Alternative Mobile
												(Optional)</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="alternative_mobile" value="<?php //echo $row['scrap_collector_'];
																															?>" onkeyup="numbersonly(this)" maxlength="10" required />
											</div>
										</div>
									</div> -->
									<div class="col-md-6">
										<div class="form-group">
											<div class="btn-list col-sm-12">

												<!-- <button class="btn btn-secondary" type="submit">
											Button
										</button> -->

												<button class="btn btn-primary" type="submit" name="btnUpdate">
													Update
												</button>
												<!-- <input class="btn btn-primary" type="submit" value="Submit" /> -->
												<!-- <input class="btn btn-info" type="reset" value="Reset" name="btnReset" /> -->

											</div>
										</div>
									</div>
								</div>
						<?php
								//echo $row['scrap_collector_name'];
							}
						} else {
							echo "Customer Not Found!";
						}
						?>
					</form>



					<!--form method="post" enctype="multipart/form-data">
						<?php
						/*$conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}

						$querySC = "SELECT * FROM tbl_scrap_collector WHERE scrap_collector_id='" . $_SESSION['user_id'] . "'";
						$query_run = mysqli_query($conn, $querySC);
						$check_customer = mysqli_num_rows($query_run) > 0;

						if ($check_customer) {
							while ($row = mysqli_fetch_array($query_run)) {
						?>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Name</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="name" value="<?php echo isset($row['scrap_collector_name']) ? $row['scrap_collector_name'] : ''; ?>" onkeyup="lettersonly(this)" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Email</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="email" name="email" value="<?php echo isset($row['scrap_collector_email']) ? $row['scrap_collector_email'] : ''; ?>" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Mobile Number</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="mobile" value="<?php echo isset($row['scrap_collector_mobile']) ? $row['scrap_collector_mobile'] : ''; ?>" onkeyup="numbersonly(this)" maxlength="10" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-6 col-form-label">Address</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" name="address" value="<?php echo isset($row['scrap_collector_address']) ? $row['scrap_collector_address'] : ''; ?>" onkeyup="lettersonly(this)" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-sm-12 col-md-5 col-form-label">Photo</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="file" name="profile_photo" accept=".jpg, .jpeg, .png" required />
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<div class="btn-list col-sm-12">
												<button class="btn btn-primary" type="submit" name="btnUpdate">Update</button>
											</div>
										</div>
									</div>
								</div>
						<?php
							}
						} else {
							echo "Customer Not Found!";
						}*/
						?>
					</form-->





				</div>
				<!-- Select-2 end -->

			</div>

			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				TSS - The Scrap Service
				<a href="#" target="_blank">MCA2_04</a>
			</div> -->
		</div>
	</div>
	<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca_tss";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}	// Check if an image file was uploaded
	if (isset($_POST['btnUpdate'])) {
	
		//$user_id = $_SESSION['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];


		$update = "update tbl_scrap_collector set scrap_collector_name='$name', scrap_collector_mobile='$mobile', scrap_collector_email='$email', scrap_collector_address='$address' WHERE scrap_collector_name='$name'";

		// Prepare the statement
		//$stmt = $conn->prepare($update);

		// Bind parameters
		//$stmt->bind_param("ssssss", $name, $mobile, $email, $address, $profile_photo, $name);



		// Insert image data into database as BLOB
		//$sql = "INSERT INTO images(image) VALUES(?)";
		
		if ($update) {
			echo"<script>alert('data has been updated')</script>";

		} else {
			echo"<script>alert('!somthing went wrong !')</script>";
		}
	} else {
		echo"<script>alert('!somthing went wrong !')</script>";
	}




	/*if (isset($_POST['btnUpdate'])) {
		//$user_id = $_SESSION['user_id'];
		$name = $_POST['name'];
		$name = $_POST['profile_photo'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		//$select = "select * from tbl_scrap_collector where scrap_collector_name='$name";

		//$select = "select * from tbl_scrap_collector where scrap_collector_id='$name'";



		$select = "SELECT `scrap_collector_id`, `scrap_collector_name`, `scrap_collector_mobile`, `scrap_collector_email`, `scrap_collector_address`, `scrap_collector_image` FROM `tbl_scrap_collector` WHERE scrap_collector_name='$name'";
		$sql = mysqli_query($conn, $select);

		if (!$sql) {
			// Query execution failed, handle error
			die("Query execution failed: " . mysqli_error($conn));
		}

		$row = mysqli_fetch_assoc($sql);




		//$sql = mysqli_query($conn, $select);
		//$row = mysqli_fetch_assoc($sql);
		$res = $row['scrap_collector_name'];
		if ($res === $name) {

			$update = "update tbl_scrap_collector set scrap_collector_name='$name',scrap_collector_mobile='$mobile', scrap_collector_email='$email', scrap_collector_address='$address', scrap_collector_image='$profile_photo' where scrap_collector_name='$name'";
			$sql2 = mysqli_query($conn, $update);
			// if ($sql2) {
			
			// 	//header("Location:parent_dash.php");

			echo "<h4 style='text-align:center;'>Your profile has been updated successfully.!</h4>";
			// } else {
			
			// 	header('location:index.php');
			// }
		} else {
			
			//header('location:index.php');
		}
	}
*/






	// if (isset($_POST['btnUpdate'])) {
	// 	$conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

	// 	if (!$conn) {
	// 		die("Connection failed: " . mysqli_connect_error());
	// 	}

	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$mobile = $_POST['mobile'];
	// 	$address = $_POST['address'];

	// 	// Check if file is uploaded
	// 	if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
	// 		$uploadDir = "../img/scrap_collector_image/";
	// 		$fileName = uniqid() . '_' . $_FILES['profile_photo']['name'];
	// 		$targetFilePath = $uploadDir . $fileName;

	// 		if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $targetFilePath)) {
	// 			// File uploaded successfully, proceed with database update
	// 			$update = "UPDATE tbl_scrap_collector SET scrap_collector_name='$name', scrap_collector_mobile='$mobile', scrap_collector_email='$email', scrap_collector_address='$address', scrap_collector_image='$targetFilePath' WHERE scrap_collector_id='" . $_SESSION['user_id'] . "'";
	// 			$sql = mysqli_query($conn, $update);

	// 			if ($sql) {
	// 				echo "<h4 style='text-align:center;'>Your profile has been updated successfully.!</h4>";
	// 			} else {
	// 				echo "Error updating profile: " . mysqli_error($conn);
	// 			}
	// 		} else {
	// 			echo "Error uploading file.";
	// 		}
	// 	} else {
	// 		echo "Please select a file to upload.";
	// 	}
	// }

	?>


	<script>
		function lettersonly(input) {
			var regex = /[^a-z][^a-z]/gi;
			input.value = input.value.replace(regex, "");

		}

		function numbersonly(input) {
			var regex = /[^0-9]/gi;
			input.value = input.value.replace(regex, "");
		}
	</script>
	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener("DOMContentLoaded", function() {
			var image = document.getElementById("image");
			var cropBoxData;
			var canvasData;
			var cropper;

			$("#modal")
				.on("shown.bs.modal", function() {
					cropper = new Cropper(image, {
						autoCropArea: 0.5,
						dragMode: "move",
						aspectRatio: 3 / 3,
						restore: false,
						guides: false,
						center: false,
						highlight: false,
						cropBoxMovable: false,
						cropBoxResizable: false,
						toggleDragModeOnDblclick: false,
						ready: function() {
							cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
						},
					});
				})
				.on("hidden.bs.modal", function() {
					cropBoxData = cropper.getCropBoxData();
					canvasData = cropper.getCanvasData();
					cropper.destroy();
				});
		});
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>