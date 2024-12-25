<?php

// include('login.php');

/*
session_start();

$connect = mysqli_connect("localhost", "root", "") or die("connection failed");

$db = mysqli_select_db($connect, "the_scrap_service");

$query = "SELECT * FROM tbl_registration";
$result = mysqli_query($connect, $query) or die("query not executed");


while ($row = mysqli_fetch_array($result)) {

	if ($row['user_id'] == $_POST['user_id'] && $row['password'] == $_POST['password'] && $row['profile_type'] == 'C') {
		$valid_user = true;
		break;
	} elseif ($row['user_id'] == $_POST['user_id'] && $row['password'] == $_POST['password']) {
		$valid_user = true;
		break;
	} else {
		echo "<script>alert('Invalid User_id or Password')</script>";
	}
}
*/

/*
session_start();

$connect = mysqli_connect("localhost", "root", "") or die("connection failed");

$db = mysqli_select_db($connect, "the_scrap_service");

$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT * FROM tbl_registration WHERE user_id = '$user_id' AND password = '$password'";
$result = mysqli_query($connect, $query) or die("query not executed");

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION["user_id"] = $row['user_id'];
	header("location: ../index.php");
} else {
	echo "<script>alert('Invalid USER_ID OR PASSWORD')</script>";
}
*/
/*
session_start();

$connect = mysqli_connect("localhost", "root", "") or die("Connection failed");

$db = mysqli_select_db($connect, "the_scrap_service");

$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT * FROM tbl_registration WHERE user_id = '$user_id' AND password = '$password'";
$result = mysqli_query($connect, $query) or die("Query not executed");

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);

	// Use password_verify to check the hashed password
	if (password_verify($password, $row['password'])) {
		$_SESSION["user_id"] = $row['user_id'];
		header("location: ../index.php");
	} else {
		echo "<script>alert('Invalid Password')</script>";
	}
} else {
	echo "<script>alert('Invalid User ID')</script>";
}
*/

/*







session_start();



$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "the_scrap_service");
//$connect = mysqli_connect("localhost", "root", "", "the_scrap_service") or die("Connection failed");
//$connect = new mysqli("localhost", "root", "", "the_scrap_service") or die("Could not connect to mysql" . mysqli_error($connect));
//$db = mysqli_select_db($connect, "the_scrap_service");

$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
//$password = md5(mysqli_real_escape_string($connect, $_POST['password'])); // Hash the entered password with MD5

$query = "SELECT * FROM `tbl_registration` WHERE user_id = '$user_id' AND password = '$password'";
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
/*
if (isset($_SESSION['user_id'])) {
	// header("Location: index.php"); // Redirect to the home page if already logged in
	echo "<script>window.location='index.php';</script>";
	exit();
}

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION['user_id'] = $row['user_id'];
	//echo "<script>alert('Owwwwww')</script>";
	// header("Location: index.php");
	echo "<script>window.location='index.php';</script>";
} else {
	echo "<script>alert('Invalid ID or PASSWORD')</script>";

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
// mysqli_close($connect);
?>

<?php

session_start();



$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "the_scrap_service");
//$connect = mysqli_connect("localhost", "root", "", "the_scrap_service") or die("Connection failed");
//$connect = new mysqli("localhost", "root", "", "the_scrap_service") or die("Could not connect to mysql" . mysqli_error($connect));
//$db = mysqli_select_db($connect, "the_scrap_service");

$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$user_password = mysqli_real_escape_string($connect, $_POST['password']);
//$password = md5(mysqli_real_escape_string($connect, $_POST['password'])); // Hash the entered password with MD5

$query = "SELECT * FROM `tbl_registration` WHERE user_id = '$user_id' AND password = '$user_password'";
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

if (isset($_SESSION["user_id"])) {
	header("Location: index.php"); // Redirect to the home page if already logged in
	exit();
}

// if (mysqli_num_rows($result) > 0) {
// 	$row = mysqli_fetch_array($result);
// 	$_SESSION["user_id"] = $row['user_id'];
// 	//echo "<script>alert('Owwwwww')</script>";
// 	header("Location: index.php");
// } else {
// 	echo "<script>alert('Invalid User ID or Password'); window.location='admin_login.php';</script>";

// 	//echo "<script>alert('Invalid User ID or Password')</script>";
// }


if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION["user_id"] = $row['user_id'];
	if ($row['profile_type'] == "S") {
		header("Location: ./ScrapCollectorDash/index.php");
	} else {
		header("Location: index.php");
	}
} else {
	echo "<script>alert('Invalid User ID or Password');window.location='login.php';</script>";
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
?>