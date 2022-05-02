<?php
$hostname = "129.237.87.5";
$username = "j149c752";
$password = "LekeiN7c";
$database = "j149c752";
$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
}

$user = $_POST["user"];

$query = "SELECT * FROM Users WHERE user_id='$user'";
$result = mysqli_query($mysqli, $query);
$count = mysqli_num_rows($result);

if($count > 0){
    echo "The user already exists<br>";
} else {
    $query = "INSERT INTO Users (user_id) VALUES ('$user')";
    mysqli_query($mysqli, $query);
    echo "The user has been stored in the database<br>";
}

$mysqli->close();
?>