<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully to database server";
$sql = "CREATE DATABASE db_iithnews";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE tb_newsupdate (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
headline VARCHAR(100) NOT NULL,
description VARCHAR(1000) NOT NULL,
postedby VARCHAR(50),
entry_time TIMESTAMP
)";
mysqli_close($conn);
?>