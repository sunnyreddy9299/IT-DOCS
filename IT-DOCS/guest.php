<?php
$dbserver='localhost';
$dbuser='root';
$dbpassword='';
$db='itdocs';
$link=mysqli_connect($dbserver,$dbuser,$dbpassword,$db);
if(!$link)
{
	die("could not connect:" .mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style1.css">
<title>  WELCOME TO IT-DOCS </title>
</head>
<body>
<h1> Guest Login</h1>
<h3><a href="admin.php">Admin Login</a></h3> 
<form action="script.php" method="post" target="_self">
<p>
username:<input type="text" name="username" required><br></br>
</p>
<p>
Email:<input type="text" name="Email"required><br></br>
<input type="submit" name="login" value="submit">
</p>
</form>
</body>
</html>	