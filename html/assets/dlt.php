<?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = mysqli_query("SELECT * FROM sign_doc WHERE dpt='$dept'");
$numrows = mysqli_num_rows($query);

if($numrows == 0)
{
$sql = "INSERT INTO sign_doc VALUES('$f_name','$l_name','$dept','$inst','$passY','$email','$pass','$cont',$website,'$gender')";
$result = mysqli_query($sql);

if($result){
echo "Account Successfully Created";
}else{
echo "Failure";
}
}
else{
echo "The Username already exist ! Please Try again with another .";
}
$conn->close();
}
?>