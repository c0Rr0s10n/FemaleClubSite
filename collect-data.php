<?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    die();
}
$json = file_get_contents('php://input');
$data = json_decode($json, true);
file_put_contents('request.txt', $data['id']);
$b_id = $data['id'];
$status = $data['status'];
mysqli_query($conn, "INSERT INTO bills (number, status) VALUES ('{$b_id}', {status})";
?>