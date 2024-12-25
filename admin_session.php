<?php

session_start();



$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "mca_tss");
//$connect = mysqli_connect("localhost", "root", "", "the_scrap_service") or die("Connection failed");
//$connect = new mysqli("localhost", "root", "", "the_scrap_service") or die("Could not connect to mysql" . mysqli_error($connect));
//$db = mysqli_select_db($connect, "the_scrap_service");

$admin_id = mysqli_real_escape_string($connect, $_POST['admin_id']);
$admin_password = mysqli_real_escape_string($connect, $_POST['admin_password']);
//$password = md5(mysqli_real_escape_string($connect, $_POST['password'])); // Hash the entered password with MD5

$query = "SELECT * FROM `tbl_admin` WHERE admin_id = '$admin_id' AND admin_password = '$admin_password'";
$result = mysqli_query($connect, $query) or die("Query not executed");

/*if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);

	// Use password_verify to check the hashed password
	if (password_verify($password, $row['password'])) {
		$_SESSION["user_id"] = $row['user_id'];
		//header("location: ../index.php");
		//header("location: home.php");
		echo "<script>alert('Owwwwww')</script>";
	} else {
		echo "<script>alert('Invalid Password')</script>";
	}
} else {
	echo "<script>alert('Invalid User ID')</script>";
}*/


// Check if the user is already logged in

if (isset($_SESSION["admin_id"])) {
	// header("Location: AdminDash/index.php"); // Redirect to the home page if already logged in
	header("Location: Admin_Dashboard/index.php"); // Redirect to the home page if already logged in

	exit();
}

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION["admin_id"] = $row['admin_id'];
	//echo "<script>alert('Owwwwww')</script>";
	header("Location: Admin_Dashboard/index.php");
} else {
	echo "<script>alert('Invalid User ID or Password'); window.location='admin_login.php';</script>";

	//echo "<script>alert('Invalid User ID or Password')</script>";
}
/*if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);
	if (password_verify($password, $row['password'])) {
		// Passwords match
		$_SESSION["user_id"] = $row['user_id'];
		// echo "<script>alert('Owwwwww')</script>";
		header("Location: home.php");
	} else {
		// Invalid password
		//echo "<script>alert('Invalid User ID or Password')</script>";
		echo "<script>alert('Invalid User ID or Password'); window.location='login.php';</script>";
	}
} else {
	// User not found
	echo "<script>alert('User not found..!'); window.location='login.php';</script>";
}*/
mysqli_close($connect);
