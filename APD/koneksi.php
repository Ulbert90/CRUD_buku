<?php
$servername = "localhost";
$database = "perpus_digital";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {

    die("FAILED: " . mysqli_connect_error());

}
?>