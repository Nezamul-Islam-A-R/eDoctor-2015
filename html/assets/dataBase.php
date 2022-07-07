<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<form action="" method="post">

<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinehealt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$first = "somir";
$last = "paltus";
$mail = "palHarami32@gmail.com";
$phn = "01928933940";

$sql = "INSERT INTO Demo_tbl (firstname, lastname, email,mobile)
VALUES ('$first', '$last', '$mail','$phn')";
//$sqlTest = "SELECT email from Demo_tbl WHERE email = '".$email."'";


if ($conn->query($sql) === TRUE) {
    echo "Table Demo_DB created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>

</body>
</html>
