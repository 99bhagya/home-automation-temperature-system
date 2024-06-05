<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT t_date, t_time, current_temp FROM temperature";
$result = mysqli_query($conn, $sql);

// Fetch the data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $datetime = $row['t_date'] . ' ' . $row['t_time'];
    $data[] = array('datetime' => $datetime, 'temperature' => $row['current_temp']);
}
?>