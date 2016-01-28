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
$sql = "DROP TABLE tb_newsupdate";
if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully.. What have you done dear!!You just deleted everything";
} else {
    echo "Error dropping table: " . $conn->error;
}
$sql = "CREATE TABLE tb_newsupdate (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
headline VARCHAR(100) NOT NULL,
description VARCHAR(1000),
imgname VARCHAR(20),
postedby VARCHAR(50),
entry_time TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
mysqli_close($conn);
?>