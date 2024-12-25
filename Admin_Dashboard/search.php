<?php
require("../db/DBConnection.php");

$output = '';

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $querySC = $conn->query("SELECT * FROM tbl_scrap_collector WHERE scrap_collector_name LIKE '%$search%' OR scrap_collector_address LIKE '%$search%'");

    if ($querySC->num_rows > 0) {
        while ($row = $querySC->fetch_assoc()) {

            $output .= '<tr>';
            //$output .= '<td class="table-plus"><img src="../vendors/images/' . $row['scrap_collector_image'] . '" width="70" height="70" alt="" /></td>';
            $output .= ' <td class="table-plus">' . $row['scrap_collector_name'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_email'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_mobile'] . '</td>';
            $output .= '<td>' . $row['scrap_collector_address'] . '</td>';
            $output .= '<td><div class="dropdown">
            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="view_scrap_collector.php"><i class="dw dw-eye"></i> View</a>
             
                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
                    Delete</a>
            </div>
        </div>
    </td></td>';
            $output .= '</tr>';
        }
    } else {
        $output .= '<tr><td colspan="6">Scrap Collector Not Found..!</td></tr>';
    }

    echo $output;
}



if (isset($_POST['queryCust'])) {
    $search1 = $_POST['queryCust'];

    $querySC = $conn->query("SELECT * FROM tbl_customer WHERE customer_name LIKE '%$search1%' OR customer_address LIKE '%$search1%'");

    if ($querySC->num_rows > 0) {
        while ($row = $querySC->fetch_assoc()) {


            $output .= '<tr>';
            //$output .= '<td class="table-plus"><img src="../vendors/images/' . $row['scrap_collector_image'] . '" width="70" height="70" alt="" /></td>';
            $output .= ' <td class="table-plus">' . $row['customer_name'] . '</td>';
            $output .= '<td>' . $row['customer_email'] . '</td>';
            $output .= '<td>' . $row['customer_mobile'] . '</td>';
            $output .= '<td>' . $row['alternate_number'] . '</td>';
            $output .= '<td>' . $row['customer_address'] . '</td>';
            $output .= '<td><div class="dropdown">
            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <!-- <a class="dropdown-item" href="view_scrap_collector.html"><i
                        class="dw dw-eye"></i> View</a> -->
                <a class="dropdown-item" href="track_cust_location.php"><i class="fa fa-map-marker" aria-hidden="true"></i>View Location</a>

                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
                    Delete</a>
            </div>
        </div>
    </td>';
            $output .= '</tr>';

            // $output .= '<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">';
            // $output .= '<div class="contact-directory-box">';
            // $output .= '<div class="contact-dire-info text-center">';
            // $output .= '<div class="contact-avatar">';
            // $output .= '<span><img src="../vendors/images/' . $row['scrap_collector_image'] . '" alt="" /></span>';
            // $output .= '</div>';
            // $output .= '<div class="contact-name">';
            // $output .= '<h4>' . $row['scrap_collector_name'] . '</h4>';
            // $output .= '</div>';
            // $output .= '<div class="view-contact">';
            // $output .= '<a href="book_order.php">View Profile</a>';
            // $output .= '</div>';
            // $output .= '</div>';
            // $output .= '</div>';
            // $output .= '</li>';
        }
    } else {
        $output .= '<li class="col-12">Customer Not Found!</li>';
    }

    echo $output;
}
