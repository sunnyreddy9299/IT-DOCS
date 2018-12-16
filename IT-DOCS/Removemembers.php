<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<h2>remove members</h2>
<h3><a href="features.php">Features</a></h3>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
username:<input type="text" name="username"><br></br>
Email:<input  type="text" name="Email"><br></br>
<input type="submit" value="submit"><br></br>
</form>
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
if(!empty($_POST['username']) && !empty($_POST['Email']))
{
	mysqli_autocommit($link,FALSE);
	$p=$_POST['username'];
	$q=$_POST['Email'];
	$r="DELETE FROM guest WHERE  username='$p'";
	$s=mysqli_query($link,$r);
	mysqli_commit($link);
		if($s)
		{
			echo"data successfully deleted ";
		}
		else
		{
			echo" data was not deleted please fill all details";
		}
}
?>
</body>
</html>