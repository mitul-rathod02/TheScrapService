<?php 
// Start session at the very beginning
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<link rel="stylesheet" href="./css/form_style.css">


	<link rel="apple-touch-icon" sizes="180x180" href="vendors/logo/Scrap_service.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/logo/Scrap_service.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/logo/Scrap_service.png" />

	<title>TSS Register Form</title>
</head>

<body>
	<div class="container">

		<form method="POST" class="register active" name="register">
			<h2 class="title">User Registration</h2>
			<div class="form-group">
				<label for="user_id">User ID</label>
				<div class="input-group">
					<input type="text" name="user_id" required placeholder="Enter  user id e.g., 'john123'" maxlength="10" id="user_id" pattern="[a-zA-Z0-9]{0-10}" title="User ID must be in characters and numbers only and length will be 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="user_name">User Name</label>
				<div class="input-group">
					<input type="text" required placeholder="Enter user name e.g., 'John'" name="user_name" maxlength="10" id="user_name" pattern="[A-Z][a-z]+" title="User name should only contain Characters maximum length is 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" required placeholder="Enter email id e.g., 'john@gmail.com'" name="email" id="email">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="mobile_number">Mobile Number</label>
				<div class="input-group">
					<input type="text" maxlength="10" required name="mobile_number" onkeyup="numbersonly(this)" placeholder="Enter mobile number" id="mobile_number" pattern="[6-9][0-9]{9}" title="Mobile Number should Starts with 6, 7, 8, 9 and length is 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" required name="password" id="password" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password contains characters (1st latter Capital and one small character) and numbers and length is 8" placeholder="Enter password  e.g., 'John@123'">
					<!--i class='bx bx-lock-alt'></i-->
					<i class="far fa-eye" id="togglePassword1" style="cursor: pointer;"></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<div class="form-group">
				<label for="confirm-pass">Confirm password</label>
				<div class="input-group">
					<input type="password" id="confirm-pass" placeholder="Enter password again" required name="confirm-pass" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password contains characters (1st latter Capital and one small character) and numbers and length is 8">
					<!--i class='bx bx-lock-alt'></i-->
					<i class="far fa-eye" id="togglePassword2" style="cursor: pointer;"></i>
				</div>
				<span class="help-text">Confirm password must be same with password</span>
			</div>
			<div class="form-group">
				<label for="user_type">User Type</label>
				<div class="input-group-radio">
					<input type="radio" id="scrap-collector" value="S" name="profile_type"><span class="rdb_user_type">Scrap Collector</span>
					<input type="radio" id="customer" value="C" name="profile_type" checked><span class="rdb_user_type">Customer</span>
				</div>
			</div>
			<!--button type="submit" class="btn-submit" name="ins">Register</button-->
			<input type="submit" value="Register" name="ins" class="btn-submit">

			<p>Already have an account? <a href="login.php">Login</a></p>
		</form>
	</div>

	<script type="text/javascript">
		function numbersonly(input) {
			var regex = /[^0-9]/gi;
			input.value = input.value.replace(regex, "");
		}

		/* for show and hide password icon */
		const togglePassword1 = document.querySelector('#togglePassword1');
		const password1 = document.querySelector('#password');

		const togglePassword2 = document.querySelector('#togglePassword2');
		const password2 = document.querySelector('#confirm-pass');


		togglePassword1.addEventListener('click', function(e) {
			// Toggle visibility of password1
			const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
			password1.setAttribute('type', type);
			// Toggle eye icon for password1
			this.classList.toggle('fa-eye-slash');
		});

		togglePassword2.addEventListener('click', function(e) {
			// Toggle visibility of password2
			const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
			password2.setAttribute('type', type);
			// Toggle eye icon for password2
			this.classList.toggle('fa-eye-slash');
		});
	</script>
</body>

</html>

<?php

//scrap collector,customer sign-in php code
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "the_scrap_service");
require('phpmailer/class.phpmailer.php');
require('phpmailer/class.smtp.php');
if (isset($_POST["ins"])) //["ins"] in this ins is submit button name
{
	$user_id = $_POST["user_id"];
	$user_name = $_POST["user_name"];
	$email = $_POST["email"];
	$mobile_number = $_POST["mobile_number"];
	$profile_type = $_POST["profile_type"];
	$password = $_POST["password"];

	//$_SESSION['registration_data'] = ['user_id' => $user_id, 'username' => $username, 'email' => $email, 'mobilenumber' => $mobilenumber, 'profile_type' => $profile_type, 'password' => $password];

	// password hashing
	//$password = password_hash($password, PASSWORD_DEFAULT);
	//$password = password_hash($_POST["password"], PASSWORD_BCRYPT);

	//------------------------------------

	$q = "INSERT INTO `tbl_registration`(`user_id`, `user_name`, `email`, `mobile_number`, `profile_type`, `password`) values('$user_id','$user_name','$email','$mobile_number','$profile_type','$password')";
	/////$q = "insert into tbl_registration values('user_id','$username','mobilenumber','profile_type','$password')";

	$t = mysqli_query($con, $q);

	//------------------------------------
	/*if ($t) {
		echo "<script>alert('Account Created')</script>";
		//header("location: verify.php");
	} else {
		echo "<script>alert('Sorry there was a problem ! try again !')</script>";
	}*/







	// this part is my code for email verification
	//$isValidLogin = mysqli_num_rows($t);
	//if ($con) {

		$otp = rand(100000, 999999);
		$_SESSION['otp'] = $otp;


		$message_body = "Dear $user_name," . "<br/><br/>" . "To complete the registration process, please use the following One Time Password (OTP): " . "<br/><br/> OTP: " . "<b>" . $otp . "</b>" . "<br/><br/><br/>" . "Thank you for choosing THE SCRAP SERVICE." . "<br/>" . "<br/>Warm Regards,<br/> The Scrap Service Team";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		/*$mail->Username = "mr.mitul62@gmail.com";
		$mail->Password = "pfsajyareoqbokwy";*/
		$mail->Username = "thescrapservice.18@gmail.com";
		$mail->Password = "cbqn kbwu iiuf ikiv";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("thescrapservice.18@gmail.com", "THE SCRAP SERVICE");
		/*  -> Change the sender email in php.ini in your xammp and follow below step
			-> In first line Apache, click on config and and open PHP(php.ini) and follow below step
			-> In PHP(php.ini), line number 1101: in this given line: ;sendmail_from = thescrapservice.18@gmail.com */
		/*$mail->Username = "thescrapservice.18@gmail.com";
		$mail->Password = "cbqn kbwu iiuf ikiv";*/

		//$mail->SetFrom("thescrapservice.18@gmail.com", "THE SCRAP SERVICE");
		//$mail->SetFrom("mr.mitul62@gmail.com", "THE SCRAP SERVICE");
		$mail->AddAddress($email);
		$mail->Subject = "OTP Verification for Registration";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);
		$result = $mail->Send();
		
		if ($result == 1) {
			//$insertQuery = "INSERT INTO otp_expiry (otp,is_expired,create_at) VALUES ('".$otp."', 0, '".date("Y-m-d H:i:s")."')";
			/*$insertQuery = "INSERT INTO tbl_otp (otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s") . "')";
			$result = mysqli_query($con, $insertQuery);
			$insertID = mysqli_insert_id($con);
			if (!empty($insertID)) {
				//header("Location:verify.php");
				//echo "<script>window.location='verify.php';</script>";
			}*/


			/*$insertQuery = "INSERT INTO tbl_otp (otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s") . "')";
			$result = mysqli_query($con, $insertQuery);
			$insertID = mysqli_insert_id($con);
			if (!empty($insertID)) {
				//header("Location:verify.php");
				echo "<script>window.location='verify.php';</script>";
			}*/


			// Store OTP in session
			//$_SESSION['otp'] = $otp;

			// Redirect to verify.php
			echo "<script>window.location='verify.php';</script>";
		}
		//header("Location:verify.php");
		//echo "<script>alert('Second number..!')</script>";

	} else {
		$errorMessage = "Invalid email id!";
	}
//}
?>

<?php
/*session_start(); // Start session

// Check if user type is set in session
if (isset($_SESSION['type'])) {
	$user_type = $_SESSION['type'];

	// Redirect based on user type
	switch ($user_type) {
		case "customer":
			header("Location: about.php");
			break;
		case "scrapper":
			header("Location: contact_us.php");
			break;
		default:
			// Handle invalid user type (logout or show error)
			session_destroy(); // Destroy session
			header("Location: login.php");
			break;
	}
} else {
	// User not logged in, redirect to login page
	header("Location: login.php");
}
*/
/*
session_start(); // Start session

// Check if user type is set in session
if (isset($_SESSION['type'])) {
	$user_type = $_SESSION['type'];

	// Redirect based on user type
	switch ($user_type) {
		case "c":
			//header("Location: about.php");
			echo "<script>alert('Customer Type')</script>";
			break;
		case "s":
			//header("Location: contact_us.php");
			echo "<script>alert('Scrap Collector Type')</script>";
			break;
		default:
			// Handle invalid user type (logout or show error)
			session_destroy(); // Destroy session
			//header("Location: login.php");
			echo "<script>alert('Noooooo,Handle invalid user type (logout or show error)')</script>";
			break;
	}
} else {
	// User not logged in, redirect to login page
	header("Location: login.php");
}*/
?>