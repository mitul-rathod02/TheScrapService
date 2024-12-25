<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login_new.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/logo/Scrap_service.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/logo/Scrap_service.png" />
</head>

<body>
    <h1>Welcome To The Scrap Service</h1>
    <a href="logout.php" onclick="logout()">Log out</a>

    <?php


    // Rest of your dashboard page code goes here
    ?>
    <script type="text/javascript">
        // if the user clicks on back button when he is on the dashboard then automatically he will log out from the system, and again enter user id and password for login.
        // Disable caching to prevent back/forward button issues
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>

    <script src="script.js"></script>
</body>

</html>