 <?php
	$con = mysqli_connect("localhost", "root", "", "the_scrap_service");

	$sql = "SELECT * FROM tbl_registration";

	$table = "";

	$result = mysqli_query($con, $sql);

	$table = "<h1> User Registration Data</h1><br><br><table border='1'><tr><th>User_ID</th><th>UserName</th><th>Email Id</th><th>Mobile Number</th><th>Profile Type</th></tr>";



	while ($res = mysqli_fetch_array($result)) {
		$user_id = $res['user_id'];
		$user_name = $res['user_name'];
		$email = $res['email'];
		$mobile_number = $res['mobile_number'];
		$profile_type = $res['profile_type'];


		$table .= "<tr><td>" . $user_id . " </td><td>" . $user_name . "</td><td>" . $email . "</td><td>" . $mobile_number . "</td><td>" . $profile_type . "</td></tr>";
	}

	$table .= "</table>";

	echo $table;
	?>


 <html>

 <head>
 	<title>LIST OF REGISTRATION</title>


 	<style>
 		body {
 			width: 80%;
 			margin-left: auto;
 			margin-right: auto;
 			text-align: center;
 			font-family: "Helvetica,Arial,Sans-Serif,Myriad Pro", "Helvetica Neue";
 		}

 		table {
 			font-family: sans-serif, arial;
 			border-collapse: collapse;
 			width: 80%;
 			align: center;
 		}

 		td,
 		th {
 			border: 1px solid #cccccc;
 			text-align: left;
 			padding: 8px;
 		}

 		tr:nth-child(even) {
 			background-color: #fffccc;
 		}
 	</style>

 </head>

 <body>
 	<div>
 		<form action="generatepdf.php" method="post">

 			<input type="hidden" name="table" value="<?php
														echo $table; ?>"><br />
 			<input type="submit" name="submit_val" value="GeneratePDF">
 		</form>
 	</div>

 </body>

 </html>