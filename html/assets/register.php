<!Doctype html>
<html>
<head>
<title>Register</title>
</head>

<body>
<p><a href = "register.php">Register</a> | <a href = "login_.php">Login</a></p>
<h3>Registration Form</h3>
<form action="" method="post">
Username:<input type="text" name="user"><br />
Password:<input type="password" name="pass"><br />
<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){
$user = $_POST['user'] ;
$pass = $_POST['pass'] ;

$con = mysql_connect('localhost','root','') or die(mysql_error()) ;
mysql_select_db('user_registration') or die("cannot select DB") ;
$query = mysql_query("SELECT * FROM login WHERE username='".$user."'");
$numrows = mysql_num_rows($query);

if($numrows == 0)
{
$sql = "INSERT INTO login values('$user','$pass')";
$result = mysql_query($sql);

if($result){
echo "Account Successfully Created";
}else{
echo "Failure";
}
}
else{
echo "The Username already exist ! Please Try again with another .";
}
}
?>

</body>

</html>