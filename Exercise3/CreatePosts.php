<?php
$hostname = "mysql.eecs.ku.edu";
$username = "j149c752";
$password = "LekeiN7c";
$database = "j149c752";
$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
}

$user = $_POST["user"];
$content = $_POST["post"];

$query = "SELECT * FROM Users WHERE user_id='$user'";
$result = mysqli_query($mysqli, $query);
$count = mysqli_num_rows($result);

if($count == 0){
    echo "The user does not exist<br>";
} else {
    $query = "INSERT INTO Posts (content) VALUES ('$content')";
    mysqli_query($mysqli, $query);
    echo "The post was successfully saved<br>";
}

?>