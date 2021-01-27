<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bill_id = $_POST["bill_id"];
    $dbhost = "srv-pleskdb48.ps.kz:3306";
    $dbuser = "onemusec_admin";
    $dbpass = "V3K3~5qtc*4n";
    $dbname = "onemusec_data";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
    }
    $sql = "SELECT * from bills WHERE number='{$bill_id}'";
    $data = mysqli_query($conn, $sql)
            or die (mysqli_error($conn));
}
?>