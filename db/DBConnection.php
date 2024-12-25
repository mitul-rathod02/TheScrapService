<?php
/*$con = mysqli_connect("localhost", "root", "");
                                    mysqli_select_db($con, "the_scrap_service");*/
//$conn = mysqli_connect("localhost", "root", "", "the_scrap_service");
$conn = mysqli_connect("localhost", "root", "", "the_scrap_service");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
