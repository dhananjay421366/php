<?php
// Ways to connect a  MySQl  db
// 1. Using PDO   // php data object   it work on any databases
//2. MySQLi extension   only work in MySQL
$servername = "localhost";
$username = "root";
$password = "";
// create a connection 
$conn = mysqli_connect($servername, $username, $password);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br> Connected successfully";


// create a database using query
$sql = "CREATE DATABASE pratap";
$result = mysqli_query($conn, $sql);

// to check db is created or not 
if ($result) {
    echo "The db was created successfully! <br>";
    echo "The db was not created successfully because of this error ---->" . mysqli_error($conn);
}

// create the table

