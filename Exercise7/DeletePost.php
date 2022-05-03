<?php
$hostname = "129.237.87.5";
$username = "j149c752";
$password = "LekeiN7c";
$database = "j149c752";
$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n",$mysqli->connect_error); 
    exit(); 
}


$query = "SELECT * FROM Posts";
$result = mysqli_query($mysqli, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if(isset($_POST[$row['post_id']])){
            $query = "DELETE FROM Posts WHERE post_id='" . $row['post_id'] . "'";
            mysqli_query($mysqli, $query);
            echo "Post " . $row['post_id'] . " has been deleted<br>";
        }
    }
}


$mysqli->close();
?>