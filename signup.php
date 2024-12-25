<?php
include('registration.php');
/*
//scrap collector,customer sign-in php code
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "the_scrap_service");
if (isset($_POST["ins"])) //["ins"] in this ins is submit button name
{
  $user_id = $_POST["user_id"];
  $username = $_POST["username"];
  $mobilenumber = $_POST["mobilenumber"];
  $profile_type = $_POST["profile_type"];
  $password = $_POST["password"];
  // password hashing
  //$password = password_hash($password, PASSWORD_DEFAULT);
  $q = "INSERT INTO `tbl_registration`(`user_id`, `username`, `mobilenumber`, `profile_type`, `password`) values('$user_id','$username','$mobilenumber','$profile_type','$password')";
  //$q = "insert into tbl_registration values('user_id','$username','mobilenumber','profile_type','$password')";

  $t = mysqli_query($con, $q);
  if ($t) {
    //echo "<script>alert('Account Created')</script>";
    header("location: verify.php");
  } else {
    echo "<script>alert('Sorry there was a problem ! try again !')</script>";
  }
}*/
?>

<?php
session_start(); // Start session

// Check if user type is set in session
if (isset($_SESSION['user_type'])) {
  $user_type = $_SESSION['user_type'];

  // Redirect based on user type
  switch ($user_type) {
    case "customer":
      //header("Location: about.php");
      echo "<script>alert('Customer page')</script>";
      break;
    case "scrapper":
      //header("Location: contact_us.php");
      echo "<script>alert('Scrap Collector page')</script>";
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

?>