<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>



 <?php
$servername = "localhost";
$username = "root";
$password = "";
$Crtdb = "Login";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$Crtdb);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE Login";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    $sqltbl1 = "CREATE TABLE logdata (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) not null,
name VARCHAR(40) not null, 
prof_inst VARCHAR(30) not null, 
studied_inst VARCHAR(30) not null,
language VARCHAR(10) not null,
Nid_card INT(25) not null,
reg_date TIMESTAMP
)";

if ($conn->query($sqltbl1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;

}
}

mysqli_close($conn);
?> 
</body>
</html>