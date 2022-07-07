<?php
session_start();
if(!isset($_SESSION["sess_user"])) {
	header("location:login.php");
} else {
?>
<!Doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h2>Welcome , <?= $_SESSION['sess_user'];?>! <a href = "Logout.php">Logout</a></h2>
<p>
</p>
</body>
</html>
<?php
}
?>