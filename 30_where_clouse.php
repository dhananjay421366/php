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

//  Usage of WHERE Clause to fetch data from database


$sql = "SELECT * FROM `form` WHERE `email`= 'shree@gmail.com'";
$result = mysqli_query($conn, $sql);
echo  $row = mysqli_num_rows($result) . "<br>";
$no = 1;
if ($row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $no . " - Email: " . $row["email"] . " - Password: " . $row["password"] . "<br>";
        $no = $no + 1;
    } 
} else {
    echo "0 results";
}

// Usages of WHERE Clauses to update the data ;
$sql = "UPDATE `form` SET `email` = 'shree@gmail.com' WHERE `form`.`sno` = 2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
