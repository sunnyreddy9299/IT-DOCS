<!DOCTYPE html>
<html>
<body>
<?php
$dbserver='localhost';
$dbuser='root';
$dbpassword='';
$db='it docs';
$link= new mysqli_connect($dbserver,$dbuser,$dbpassword);
if(!$link)
{
	die("could not connect:" .mysqli_connect_error());
}
?>
</body>
</html>