<?php
$db = 'job_offer';
$server = 'localhost';
$user = 'root';
$ps = "";
$conn = mysqli_connect($server, $user, $ps, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "connected";
}
