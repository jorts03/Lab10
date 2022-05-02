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

$query = "SELECT * FROM Users";
$result = mysqli_query($mysqli, $query);

echo "<table border =\"1\">";
echo "<th>Users</th>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>  $row[0]  </td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>