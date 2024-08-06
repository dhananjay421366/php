<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pratap";
// create a connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br> Connected successfully";



// create the table in the db
/*
$sql = "CREATE TABLE `dhanu` (`sno` INT NOT NULL AUTO_INCREMENT , `trip` VARCHAR(255) NOT NULL , `dest` VARCHAR(255) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

// to check Table is created or not 
if ($result) {
    echo "<br>The Table was created successfully! <br>";
} else {
    echo "The Table was not created successfully because of this error ---->" . mysqli_error($conn);
}
    */


$sql = "INSERT INTO `dhanu` (`sno`, `trip`, `dest`) VALUES ('1', 'pune', 'karjat')";

$result = mysqli_query($conn, $sql);

// to check Table is created or not

if ($result) {
    echo "<br>The Record was inserted successfully! <br>";
} else {
    echo "The Record was not inserted successfully because of this error ---->" . mysqli_error($conn);
}
?>