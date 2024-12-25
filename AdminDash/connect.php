<?php

// Creating a new mysqli connection
$con = new mysqli('localhost', 'root','','the_scrap_service');

// Checking if the connection was successful
if ($con) {
    echo "Connection Successful";
} else {
    // If there is an error, die and display the error message
    die(mysqli_error($con));
}

?>
