<?php
// Start session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <link rel="apple-touch-icon" sizes="180x180" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/logo/Scrap_service.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>TSS Login</title>
    <link rel="stylesheet" href="./css/form_style.css">

</head>

<body>

    <div class="container" id="user-login">
        <form class="login active" action="#" method="POST">
            <h2 class="title">OTP Verification</h2>

            <div class="form-group">
                <label for="otp">Enter OTP</label>
                <div class="input-group">
                    <input type="text" id="otp" name="otp" required placeholder="Enter 6 digit OTP number" maxlength="6" onkeyup="numbersonly(this)" pattern="[0-9]{6}" title="OTP should only contain numbers maximum length is 6">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <span class="help-text">Please check your email for OTP.</span>
                <!--span class="help-text">At least 8 characters</span-->
            </div>
            <div class="form-group">
                <label for="time-left">Time remaining</label>

                <label id="timer" style="color: red; margin-left: 3%;"></label>
                <div class="input-group">
                    <!--input type="text" id="otp" name="otp" required placeholder="Enter 6 digit OTP number" maxlength="6" onkeyup="numbersonly(this)">
                    <i class='bx bx-lock-alt'></i-->


                </div>
            </div>
            <!--button type="submit" class="btn-submit" name="login">Login</button-->
            <input type="submit" class="btn-submit" name="login" value="Login">

            <!--a href="#">Forgot password?</a-->
            <p>Not received OTP? <!--a href="" name="btnLogin">Resend</a--><button type="submit" style=" background: none; color: var(--blue); width: 15%; border-radius: 6px; cursor: pointer;transition: all .3s ease; border: none;  font-weight: 500;  font-size: 100%;" name="btnResend">Resend</button></p>
        </form>

    </div>

    <!--script src="script.js"></script-->
    <script>
        // function validateForm() {
        /* time remain no show that why add this line*/

        var timeLeft = 59;

        // set timer for 4 minutes 
        var timeLeft = 240;
        var elem = document.getElementById('timer');
        var timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == -1) {
                clearTimeout(timerId);
                doSomething();
            } else {
                elem.innerHTML = timeLeft + ' seconds';
                timeLeft--;
            }
        }

        function doSomething() {
            // alert("Please resend OTP on your email.!");
            //window.location = "login.php";
        }

        function numbersonly(input) {
            var regex = /[^0-9]/gi;
            input.value = input.value.replace(regex, "");
        }
    </script>
</body>

</html>
<?php
// Start session
//session_start();

// Redirect to verify.php
//echo "<script>window.location='verify.php';</script>";

//$con = mysqli_connect("localhost", "root", "");
//mysqli_select_db($con, "the_scrap_service");

/*
//if (!empty($_POST["login"]) && $_POST["otp"] != '') {
if (!empty($_POST["login"]) && $_POST["otp"] != '') {

    //$sqlQuery = "SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";
    $sqlQuery = "SELECT * FROM tbl_otp WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";

    $result = mysqli_query($con, $sqlQuery);
    $count = mysqli_num_rows($result);
    if (!empty($count)) {
        //$sqlUpdate = "UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'";
        $sqlUpdate = "UPDATE tbl_otp SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'";

        $result = mysqli_query($con, $sqlUpdate);
        //header("Location:ex.php");
        header("Location:login.php");
    } else {
        $errorMessage = "Invalid OTP!";
    }
} else if (!empty($_POST["otp"])) {
    $errorMessage = "Enter OTP!";
}*/








/*
if (!empty($_POST["login"]) && $_POST["otp"] != '') {
    //$sqlQuery = "SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";
    $sqlQuery = "SELECT * FROM tbl_otp WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";

    // OTP validation for 4 minitus
    //$sqlQuery = "SELECT * FROM tbl_otp WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 4 MINUTE)";

    $result = mysqli_query($con, $sqlQuery);
    $count = mysqli_num_rows($result);
    if (!empty($count)) {
        //$sqlUpdate = "UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'";
        $sqlUpdate = "UPDATE tbl_otp SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'";

        $result = mysqli_query($con, $sqlUpdate);
        //header("Location:ex.php");
        // header("Location:login.php");
        echo "<script>alert('OTP verification successful!'); window.location='login.php';</script>";
    } else {

        echo "<script>alert('Invalid OTP!')</script>";
    }
} else if (!empty($_POST["otp"])) {

    echo "<script>alert('Please enter OTP!')</script>";
}*/

?>

<?php
// Start session
//session_start();

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "the_scrap_service");


/*if (!empty($_POST["login"]) && $_POST["otp"] != '') {
    // Check if OTP is stored in session
    if (isset($_SESSION['otp'])) {
        // Verify entered OTP with the one stored in the session
        if ($_POST["otp"] == $_SESSION['otp']) {
            // Clear OTP from session
            unset($_SESSION['otp']);

            // Redirect user to login page
            echo "<script>alert('OTP verification successful!'); window.location='login.php';</script>";
            exit; // Ensure script execution stops after redirect
        } else {
            echo "<script>alert('Invalid OTP!')</script>";
        }
    } else {
        echo "<script>alert('Session expired! Please retry registration.')</script>";
    }
} else if (!empty($_POST["otp"])) {
    echo "<script>alert('Please enter OTP!')</script>";
}
*/

if (!empty($_POST["login"]) && $_POST["otp"] != '') {
    // Check if OTP is stored in session
    if (isset($_SESSION['otp'])) {
        // Verify entered OTP with the one stored in the session
        if ($_POST["otp"] == $_SESSION['otp']) {
            // Clear OTP from session
            unset($_SESSION['otp']);

            // Insert registration details into the database
            $user_id = $_POST["user_id"];
            $user_name = $_POST["user_name"];
            $email = $_POST["email"];
            $mobile_number = $_POST["mobile_number"];
            $profile_type = $_POST["profile_type"];
            $password = $_POST["password"];

            $q = "INSERT INTO `tbl_registration`(`user_id`, `user_name`, `email`, `mobile_number`, `profile_type`, `password`) values('$user_id','$user_name','$email','$mobile_number','$profile_type','$password')";
            $t = mysqli_query($con, $q);

            if ($t) {
                // Registration successful, redirect to login page
                echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
            } else {
                echo "<script>alert('Error: Registration failed!');</script>";
            }
        } else {
            echo "<script>alert('Invalid OTP!')</script>";
        }
    } else {
        echo "<script>alert('Session expired! Please retry registration.')</script>";
    }
} else if (!empty($_POST["otp"])) {
    echo "<script>alert('Please enter OTP!')</script>";
}

?>