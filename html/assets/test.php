<!Doctype html>
<html>
<head>
<title>Login</title>
</head>

<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["Usname"])) {
     $nameErr = "User Name is required";
   } else {
     $name = test_input($_POST["Usname"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   User Name: <input type="text" name="Usname">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "User Name: ", $name;
echo "<br>";
echo "Comment :";
echo "<br>";
echo $comment;

?>

</body>
</html>
