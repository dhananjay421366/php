<?php
echo "Welcome to the stage where we are ready to get connect database  <br>";

// Ways to connect a  MySQl  db
// 1. Using PDO   // php data object   it work on any databases


//2. MySQLi extension   only work in MySQL

$servername = "localhost";
$username = "root";
$password = "";

// create a connection 
$conn = mysqli_connect($servername, $username, $password);

// check connection

// if($conn->connect_error){
//     die("Connection failed: ". $conn->connect_error);
// }
if (!$conn) {
    die("Sorry to failed to  connect :" . mysqli_connect_error());
}

echo "Connected successfully";
