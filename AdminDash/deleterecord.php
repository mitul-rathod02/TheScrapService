<?php
	session_start();

	if(!isset($_SESSION['admin_id'])) 
	{
	header("location: ../admin_login.php");
        exit();
	}
?>
<?php
 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"the_scrap_service");

$uid = $_GET['user_id'];

$query = "select * from tbl_registration where user_id='$uid'";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


	<link rel="stylesheet" href="../css/form_style.css">

	<title>update data </title>
</head>

<body>
	<div class="container">

		<form method="POST" class="register active" name="register">
			<h2 class="title">Update Registration Data</h2>
			<div class="form-group">
				<label for="user_id">User ID</label>
				<div class="input-group">
					<input type="text" name="user_id" required value="<?php echo $result['user_id']; ?>" maxlength="10" id="user_id" pattern="[a-zA-Z0-9]{0-10}" title="User ID must be in characters and numbers only and length will be 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="user_name">User Name</label>
				<div class="input-group">
					<input type="text" required value="<?php echo $result['user_name']; ?>" name="username" maxlength="10" id="user_name" pattern="[A-Z][a-z]+" title="User name should only contain Characters maximum length is 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" required value="<?php echo $result['email']; ?>" name="email" id="email">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="mobile_number">Mobile Number</label>
				<div class="input-group">
					<input type="text" maxlength="10" required name="mobilenumber" onkeyup="numbersonly(this)" value="<?php echo $result['mobile_number']; ?>" id="mobile_number" pattern="[6-9][0-9]{9}" title="Mobile Number should Starts with 6, 7, 8, 9 and length is 10">
					<i class='bx bx-user'></i>
				</div>
			</div>
		
		
			<!--button type="submit" class="btn-submit" name="ins">Register</button-->
			<input type="submit" value="Delete" name="delete" class="btn-submit">
		</form>
	</div>

	<script>
		function numbersonly(input) {
			var regex = /[^0-9]/gi;
			input.value = input.value.replace(regex, "");
		}
	</script>
</body>

</html>

<?php

//scrap collector,customer sign-in php code
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "the_scrap_service");
if (isset($_POST["delete"])) //["ins"] in this ins is submit button name
{
	$user_id = $_POST["user_id"];
	$user_name = $_POST["username"];
    $email = $_POST["email"];
	$mobile_number = $_POST["mobilenumber"];
	// password hashing
	//$password = password_hash($password, PASSWORD_DEFAULT);
	//$password = password_hash($_POST["password"], PASSWORD_BCRYPT);


    $q="delete from tbl_registration where user_id='$uid' ";
   
    $t=mysqli_query($con,$q);
    if($t)
    {
      echo"<script>alert('data has delete')</script>";
    }
    else{
      echo"<script>alert('data has not been deleted')</script>";
    }
    
  }
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