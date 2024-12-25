<?php
// Start session
session_start();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['otp'])) {
    // Fetch OTP entered by the user
    $enteredOTP = $_POST['otp'];

    // Fetch OTP stored in session
    $storedOTP = $_SESSION['otp'];

    // Verify entered OTP with the one stored in the session
    if ($enteredOTP == $storedOTP) {
        // Clear OTP from session
        unset($_SESSION['otp']);

        // Insert user data into the database (example)
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "mca_tss");


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }



        // Fetch data from the registration form (assuming you have stored these in session during registration)
        $userType = $_SESSION['user_type'];
        $userid =  $_SESSION['user_id'];
        $name =  $_SESSION['user_name'];
        $mobile = $_SESSION['mobile_number'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $alternate_mobile = $_SESSION['alternate_mobile'];
        $password = $_SESSION['password'];


        // Insert data into the appropriate table based on user type
        if ($userType == 'customer') {
            $sql = "INSERT INTO tbl_customer (customer_id, customer_name, customer_mobile, customer_email, customer_address, customer_alternate_mobile, customer_password) VALUES ('$userid','$name', '$mobile', '$email', '$address','$alternate_mobile','$password')";
        } elseif ($userType == 'scrap_collector') {

            // Check if file is uploaded for scrap collector
            if ($_FILES['scrap_collector_image']['error'] == UPLOAD_ERR_OK) {
                $scrapCollectorImage = $_FILES['scrap_collector_image']['name'];
                $scrapCollectorImageTmp = $_FILES['scrap_collector_image']['tmp_name'];
                $scrapCollectorImageFolder = "img/"; // Folder to store uploaded images
                move_uploaded_file($scrapCollectorImageTmp, $scrapCollectorImageFolder . $scrapCollectorImage);

                // Insert data into scrap collector table with image
                $sql = "INSERT INTO tbl_scrap_collector (scrap_collector_id, scrap_collector_name, scrap_collector_mobile, scrap_collector_email, scrap_collector_address, scrap_collector_image, scrap_collector_password) VALUES ('$userid','$name', '$mobile', '$email', '$address', '$scrapCollectorImage', '$password')";
            } else {

                echo "Please select an image for the scrap collector.";
                exit; // Stop further executio

                // Insert data into scrap collector table without image
                // $sql = "INSERT INTO tbl_scrap_collector (scrap_collector_id, scrap_collector_name, scrap_collector_mobile, scrap_collector_email, scrap_collector_address, scrap_collector_password) VALUES ('$userid','$name', '$mobile', '$email', '$address', '$password')";
            }
        }

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User data inserted into database successfully!'); window.location='login_new.php';</script></script>";
        } else {
            echo "<script>alert('Error inserting user data into database: " . $conn->error . "');</script>";
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "<script>alert('Invalid OTP!');</script>";
    }
} else {
    //echo "<script>alert('Invalid request!');</script>";
}
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
        <form class="login active" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3 style="text-align: center;">The Scrap Service</h3>
            <br />
            <hr /><br />
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