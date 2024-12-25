<?php
require("../db/DBConnection.php");

$output = '';

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $querySC = $conn->query("SELECT * FROM tbl_scrap_collector WHERE scrap_collector_name LIKE '%$search%' OR scrap_collector_address LIKE '%$search%'");

    if ($querySC->num_rows > 0) {
        while ($row = $querySC->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td class="table-plus"><img src="../vendors/images/' . $row['scrap_collector_image'] . '" width="70" height="70" alt="" /></td>';
            $output .= '<td>' . $row['scrap_collector_name'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_email'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_mobile'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_address'] . '</td>';
            $output .= '<td><a href="scrap_collector.php"><i class="dw dw-eye"></i> View</a></td>';
            $output .= '</tr>';
        }
    } else {
        $output .= '<tr><td colspan="6">Scrap Collector Not Found..!</td></tr>';
    }

    echo $output;
}



if (isset($_POST['query1'])) {
    $search1 = $_POST['query1'];
    $querySC = $conn->query("SELECT * FROM tbl_scrap_collector WHERE scrap_collector_name LIKE '%$search1%' OR scrap_collector_address LIKE '%$search1%'");

    if ($querySC->num_rows > 0) {
        while ($row = $querySC->fetch_assoc()) {
            $output .= '<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">';
            $output .= '<div class="contact-directory-box">';
            $output .= '<div class="contact-dire-info text-center">';
            $output .= '<div class="contact-avatar">';
            $output .= '<span><img src="../vendors/images/' . $row['scrap_collector_image'] . '" alt="" /></span>';
            $output .= '</div>';
            $output .= '<div class="contact-name">';
            $output .= '<h4>' . $row['scrap_collector_name'] . '</h4>';
            $output .= '</div>';
            $output .= '<div class="view-contact">';
            $output .= '<a href="book_order.php">View Profile</a>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</li>';
        }
    } else {
        $output .= '<li class="col-12">Scrap Collector Not Found!</li>';
    }

    echo $output;
}
