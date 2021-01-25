<?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli -> connect_errno) {
  file_put_contents('request.txt', "Failed to connect to MySQL: " . $mysqli -> connect_error);
  exit();
}
$json = file_get_contents('php://input');
$data = json_decode($json, true);
file_put_contents('request.txt', $data['id']);
$b_id = $data['id'];
$status = $data['status'];
$sql = "INSERT INTO bills (number, status) VALUES ('".$b_id."', '".$status."');";
if (mysqli_query($conn, $sql)) {
 echo 'ok';
} else {
 file_put_contents('request.txt', "Error: " . $sql . "<br>" . mysqli_error($conn));
}
?>