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
        <form action="tss_session.php" method="POST" class="login active">

            <h2 class="title">User Login</h2>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <div class="input-group">
                    <input type="text" name="user_id" required placeholder="Enter  user id e.g., 'john123'" maxlength="10" id="user_id" pattern="[a-zA-Z0-9]{0-10}" title="User ID must be in characters and numbers only and length will be 10">
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
            <input type="submit" value="Login" name="btnLogin" class="btn-submit">
            <!--a href="#">Forgot password?</a-->
            <p>Don't have an account? <a href="registration.php">Register Here</a></p>
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

</html>