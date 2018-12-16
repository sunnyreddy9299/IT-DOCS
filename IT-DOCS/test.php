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
<link rel="stylesheet" type="text/css" href="styletable.css">
</head>
<body>
<?php
if(isset($_POST['month']) && isset($_POST['dt']) && isset($_POST['year']))
{
	$month=$_POST['month'];
	$dt=$_POST['dt'];
	$year=$_POST['year'];
		$date_value=date("$year-$month-$dt");
		$ac="SELECT * FROM notice WHERE date='$date_value'";
			$q=mysqli_query($link,$ac);
			if($q)
			{
				foreach($q as $ran)
				{
					?>
					<table width=:100%>'
							<tr>
							<th>name</th>
							<th> download file </th>
							<th> view file</th>
							</tr>
							<tr>
							<td><?php echo$ran['name'];?></td>
						    <td><a href="download.php?name=<?php echo$ran['name'];?>">download </a></td>
			                <td><a href="view.php?name=<?php echo$ran['name'];?>">view</a></td>
							</tr>
							</table>
							<?php
					}
			}
			else
			{
				echo "there are no records of such date";
			}
}
?>
</body>
</html>

