<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60;index.php">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/logo/Scrap_service.png" />

    <title>TSS Admin Login</title>
    <link rel="stylesheet" href="./css/form_style.css">

</head>

<body>

    <div class="container" id="admin-login">
        <form action="admin_session.php" class="login active" method="POST">
            <h3 style="text-align: center;">The Scrap Service</h3>
            <br />
            <hr /><br />
            <h2 class="title">Admin Login</h2>
            <div class="form-group">
                <label for="admin_id">Admin ID</label>
                <div class="input-group">
                    <input type="text" name="admin_id" required placeholder="Enter User ID" maxlength="10" id="user_id" pattern="[a-zA-Z0-9]{0-10}" title="user_id must be in characters and numbers only and length will be 10">
                    <i class='bx bx-user'></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" required name="admin_password" maxlength="8" id="admin_password" placeholder="Enter Password">
                    <!--i class='bx bx-show toggle-password' toggle="#password"></i-->
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>

                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <button type="submit" class="btn-submit" name="adminlogin">Login</button>
            <!--a href="#">Forgot password?</a-->
            <!--p>Don' t have an account? <a href="registration.php">Register Here</a></p-->
        </form>

    </div>

    <script>
        /* for show and hide password icon */
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#admin_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <!--script src="js/script.js"></script-->
</body>

</html>