<?php
//connecting database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "home";

$conn = mysqli_connect($hostname, $username, $password, $database);

//checking connection
if(!$conn){
    die("Connection failed: " . mysql_connect_error());
}

// Retrieve most recent temperature and humidity data from database
$sql = "SELECT current_temp, humidity FROM temperature ORDER BY t_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$temperature = $row['current_temp'];
$humidity = $row['humidity'];

// Store new temperature and humidity data
if(isset($_POST["temperature"]) && isset($_POST["humidity"])){
    $t = $_POST["temperature"];
    $h = $_POST["humidity"];

    $sql = "INSERT INTO temperature (current_temp, humidity) VALUES (".$t.", ".$h.")";

    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
        // Update temperature and humidity variables with new data
        $temperature = $t;
        $humidity = $h;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>