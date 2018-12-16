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
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
<h1>Admin Login</h1>
<h3><a href="guest.php">Guest login</a></h3>
<div>
<form action="adminscript.php" method="post" target="_self">
<p>
username:<input type="text" name="username" required><br></br>
Password:<input type="password" name="Password" required><br></br>
</p>
<input type="submit" value="submit">
</div>
</body>
</html>