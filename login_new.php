<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60;index.php">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>TSS Login</title>
    <link rel="stylesheet" href="./css/form_style.css">

</head>

<body>

    <div class="container" id="user-login">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login active">
            <h3 style="text-align: center;">The Scrap Service</h3>
            <br />
            <hr /><br />
            <h2 class="title">User Login</h2>


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

                    <!-- <input type="email" name="email" required placeholder="Enter  user id e.g., 'john123'"> -->
                    <i class='bx bx-user'></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" required name="password" maxlength="8" id="password" placeholder="Enter password" title="Password contains characters (1st latter Capital and one small character) and numbers and length is 8">
                    <!--i class='bx bx-lock-alt'></i-->
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <!--button type="submit" class="btn-submit" name="btnLogin">Login</button-->
            <input type="submit" value="Login" class="btn-submit">
            <!--a href="#">Forgot password?</a-->
            <p>Don't have an account? <a href="register_new.php">Register Here</a></p>
        </form>

    </div>

    <script>
        /* for show and hide password icon */
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <!--script src="script.js"></script-->
    <?php
    session_start();

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mca_tss";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userType = $_POST['user_type'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        if ($userType == 'customer') {
            $table = 'tbl_customer';
            //$redirect = 'CustomerDash/index.php';
            $redirect = 'index.php';
        } elseif ($userType == 'scrap_collector') {
            $table = 'tbl_scrap_collector';
            $redirect = 'ScrapCollectorDash/index.php';
        } else {
            echo "<script>alert('Invalid user type!');</script>";
            exit();
        }
        //$sql = "SELECT * FROM $table WHERE ${userType}_email='$email' AND ${userType}_password='$password'";


        $sql = "SELECT * FROM $table WHERE ${userType}_id='$user_id' AND ${userType}_password='$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, redirect to respective dashboard
            $_SESSION['user_type'] = $userType;
            $_SESSION['user_id'] = $user_id;
            // echo "Hello" . $_SESSION['email'] . "Welcom";

            header("Location: $redirect");
            // header("Location: ${userType}_dashboard.php");
            exit();
        } else {
            // User not found, display error message
            echo "<script>alert('Invalid email or password!');</script>";
        }
    }

    $conn->close();
    ?>

</body>

</html>