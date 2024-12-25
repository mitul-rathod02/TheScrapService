<?php
// Start session at the very beginning
session_start(); ?>

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

        <form method="POST" class="register active" name="register" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <br><br><br><br><br><br><br><br><br>
            <h3 style="text-align: center;">The Scrap Service</h3>
            <br />
            <hr /><br />
            <h2 class="title">User Registration</h2>

            <div class="form-group user_type">
                <label for="user_type">Select User Type</label>

                <div class="input-group">
                    <select name="user_type" id="user_type" style="width: 100%;height: 40px; padding-left: 10px;outline: none;border-radius: 6px; border: 1px solid var(--dark-grey); transition: all .3s ease;">
                        <option value="customer">Customer</option>
                        <option value="scrap_collector">Scrap Collector</option>
                    </select>
                </div>
            </div>
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
                    <input type="text" maxlength="10" required name="mobile_number" onkeyup="numbersonly(this)" placeholder="Enter mobile number" id="mobile_number" title="Mobile Number should Starts with 6, 7, 8, 9 and length is 10">
                    <i class='bx bx-user'></i>
                </div>
            </div>

            <div class="form-group">
                <label for="alternate_mobile">Alternate Mobile Number</label>
                <div class="input-group">
                    <input type="text" maxlength="10" required name="alternate_mobile" onkeyup="numbersonly(this)" placeholder="Enter mobile number" id="alternate_mobile" title="Mobile Number should Starts with 6, 7, 8, 9 and length is 10">
                    <i class='bx bx-user'></i>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <div class="input-group">
                    <input type="text" required name="address" placeholder="Enter Address" id="address">
                    <i class='bx bx-home'></i>
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
                    <input type="password" id="confirm_password" placeholder="Enter password again" required name="confirm_password" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password contains characters (1st latter Capital and one small character) and numbers and length is 8">
                    <!--i class='bx bx-lock-alt'></i-->
                    <i class="far fa-eye" id="togglePassword2" style="cursor: pointer;"></i>
                </div>
                <span class="help-text">Confirm password must be same with password</span>
            </div>


            <!-- Additional field for scrap collector -->

            <div class="form-group" id="scrap_collector_fields" style="display: none;">
                <label for="">Select Image</label>
                <div class="input-group">
                    <input type="file" name="scrap_collector_image" id="scrap_collector_image" accept=".jpg, .jpeg, .png">
                    <i class='bx bx-file'></i>
                </div>
            </div>

            <!--button type="submit" class="btn-submit" name="ins">Register</button-->
            <input type="submit" value="Register" class="btn-submit">

            <p>Already have an account? <a href="login_new.php">Login</a></p>
        </form>
    </div>

    <script type="text/javascript">
        // for image
        document.getElementById('user_type').addEventListener('change', function() {
            var userType = this.value;
            var scrapCollectorFields = document.getElementById('scrap_collector_fields');

            // If user type is scrap collector, display additional fields
            if (userType === 'scrap_collector') {
                scrapCollectorFields.style.display = 'block';
            } else {
                scrapCollectorFields.style.display = 'none';
            }
        });


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

    <?php


    require('phpmailer/class.phpmailer.php');
    require('phpmailer/class.smtp.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mca_tss";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the registration form
        $userType = $_POST['user_type'];

        $user_id = $_POST["user_id"];
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];
        $mobile_number = $_POST["mobile_number"];
        $address = $_POST['address'];

        $alternate_mobile = $_POST['alternate_mobile'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];



        if ($password !== $confirm_password) {
            echo "Password and Confirm Password do not match";
            exit; // Stop further execution
        }


        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;

        // Store other user data in session
        $_SESSION['user_type'] = $userType;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['mobile_number'] = $mobile_mobile;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['alternate_mobile'] = $alternate_mobile;
        $_SESSION['password'] = $password;



        $message_body = "Dear $name," . "<br/><br/>" . "To complete the registration process, please use the following One Time Password (OTP): " . "<br/><br/> OTP: " . "<b>" . $otp . "</b>" . "<br/><br/><br/>" . "Thank you for choosing THE SCRAP SERVICE." . "<br/>" . "<br/>Warm Regards,<br/> The Scrap Service Team";
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

        $mail->AddAddress($email);
        $mail->Subject = "OTP Verification for Registration";
        $mail->MsgHTML($message_body);
        $mail->IsHTML(true);
        $result = $mail->Send();

        if ($result == 1) {
            // Redirect to verify.php
            echo "<script>window.location='verify_new.php';</script>";
        }
        //header("Location:verify.php");
        //echo "<script>alert('Second number..!')</script>";

    } else {
        $errorMessage = "Invalid email id!";
    }




    ?>




</body>

</html>