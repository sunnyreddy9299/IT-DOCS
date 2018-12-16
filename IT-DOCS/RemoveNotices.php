<?php
ini_set('display_startup_errors',1);  
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
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
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h3><a href="features.php">Features</a></h3>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
name:
<select name="P">
<option>select option</option>
<?php
$query="SELECT * FROM notice";
$oi=mysqli_query($link,$query);
while($raw=mysqli_fetch_array($oi))
{
	?>
	<option value="<?php echo $raw['name'];?>"><?php echo $raw['name'];?></option>
	</select>
	<?php
}
?>
<input type="submit" value="submit"></input>
<?php
if(isset($_POST['P']))
{
		$h=$_POST['P'];
		$we="DELETE FROM notice WHERE name='$h'";
		$er=mysqli_query($link,$we);
		if($er)
		{
			?>
			<script>window.alert("data successfully deleted");</script>
			<?php
		}
	}
	?>
</body>
</html>