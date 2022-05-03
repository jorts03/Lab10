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

$author_id = $_POST['user_id'];

$query = "SELECT content FROM Posts WHERE author_id = '$author_id'";
$result = mysqli_query($mysqli, $query);

echo "<table border =\"1\">";
echo "<th>" . $author_id . "'s Posts";
echo "</th>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['content'] . "</td>";
    echo "</tr>";
}
echo "</table>";


$mysqli->close();
?>