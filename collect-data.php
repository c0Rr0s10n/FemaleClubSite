<?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
$query = mysqli_query($conn, "INSERT INTO bills ('number', 'session') VALUES ('".$_POST['id'].','324'")
                    or die (mysqli_error($conn));
?>