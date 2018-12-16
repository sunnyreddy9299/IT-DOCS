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
<?php
	$uname=$_POST['username'];
	$pass=$_POST['Password'];
	$qry=mysqli_query($link,"SELECT * FROM admin WHERE username='$uname'");
	if($qry)
	{
		$row=mysqli_fetch_array($qry);
		if($uname==$row['username'])
		{
			if($uname==$row['username'] && $pass==$row['password'])
			{
				include'features.php';
			}
		}
	}
else 
{
	include 'admin.php';
}
  ?>