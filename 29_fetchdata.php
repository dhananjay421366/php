<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
// create a connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br> Connected successfully <br>";

// now select data from db and display it

$sql = "SELECT * FROM form";
$result = mysqli_query($conn, $sql);
echo  $row = mysqli_num_rows($result) . "<br>";
echo  $col = mysqli_fetch_assoc($result) . "<br>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["sno"] . " - Email: " . $row["email"] . " - Password: " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}
