<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon (2).ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util (2).css">
	<link rel="stylesheet" type="text/css" href="css/main (2).css">
<!--===============================================================================================-->
</head>
<body>
<?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
?>
	<div class="limiter">
		<div class="container-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Blogger</th>
								<th class="column100 column2" data-column="column2">Promo code</th>
								<th class="column100 column3" data-column="column3">Amount of passed</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query = mysqli_query($conn, "SELECT * FROM promos")
								or die (mysqli_error($conn));
							while ($row = mysqli_fetch_array($query)) {
  								echo '<tr class="row100">
								  <td class="column100 column1 hov-column-ver6" data-column="column1">'.$row['blogger'].'</td>
								  <td class="column100 column2" data-column="column2">'.$row['promo'].'</td>
								  <td class="column100 column3" data-column="column3">'.$row['amount'].'</td>
								  </tr>';
							}
							?>
						</tbody>
					</table>
					<!-- <form action="" method="post">
						<input type="text" name="Blogger" id="" placeholder="Name of blogger">
						<input type="text" name="Blogger" id="" placeholder="Promo">
					</form> -->
				</div>
			</div>
		</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min (2).js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper (2).js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min (2).js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min (2).js"></script>
<!--===============================================================================================-->
	<script src="js/main (2).js"></script>

</body>
</html>