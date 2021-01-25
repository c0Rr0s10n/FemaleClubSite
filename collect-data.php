<?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
$data = json_decode(file_get_contents('php://input'), true);
$query = mysqli_query($conn, "INSERT INTO bills ('number', 'session') VALUES ('".$data['id'].','324'")
                    or die (mysqli_error($conn));
?>