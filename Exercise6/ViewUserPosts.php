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
                
$query = "SELECT user_id FROM Users";
$result = mysqli_query($mysqli, $query);
        
echo '<label for="user">Select a user</label>';
echo '<select name="user">';

$x = mysqli_num_rows($result);

for($i=0; $i<$x; $i++){
    $row = mysqli_fetch_array($result);
    $user_id = $row['user_id'];
    echo '<option value="' .$user_id. '">' .$user_id. '</option>';
}

echo '</select>';
                
$mysqli->close();
?>