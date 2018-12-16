<?php
ini_set("display_startup_errors",1);  
ini_set("display_errors",1);
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
if(isset($_POST['H']))
{
	$g=$_POST['H'];
	if($g=="Holiday")
	{
		$que="SELECT * FROM notice WHERE Type='Holiday'";
		$z=mysqli_query($link,$que);
		foreach($z as $rat)
		{
			?>
					<table width=:100%>
							<tr>
							<th>name</th>
							<th> download file </th>
							<th> view file </th>
							</tr>
							<tr>
							<td><?php echo$rat['name'];?></td>
						    <td><a href="download.php?name=<?php echo$rat['name'];?>">download </a></td>
			                <td><a href="view.php?name=<?php echo$rat['name'];?>">view</a></td>
							</tr>
							</table>
							<?php
		}
	}
	else if($g=="Event")
	{
		$que="SELECT * FROM notice WHERE Type='Event'";
		$z=mysqli_query($link,$que);
		foreach($z as $rat)
		{
			?>
					<table width=:100%>'
							<tr>
							<th>name</th>
							<th> download file</th>
							<th> view file </th>
							</tr>
							<tr>
							<td><?php echo$rat['name'];?></td>
						    <td><a href="download.php?name=<?php echo$rat['name'];?>">download </a></td>
			                <td><a href="view.php?name=<?php echo$rat['name'];?>">view</a></td>
							</tr>
							</table>
							<?php
		}
	}
	else if($g=="Seminars")
	{
		$que="SELECT * FROM notice WHERE Type='Seminars'";
		$z=mysqli_query($link,$que);
		foreach($z as $rat)
		{
			?>
					<table width=:100%>'
							<tr>
							<th>name</th>
							<th> download file</th>
							<th> view file </th>
							</tr>
							<tr>
							<td><?php echo$rat['name'];?></td>
						    <td><a href="download.php?name=<?php echo$rat['name'];?>">download </a></td>
			                <td><a href="view.php?name=<?php echo$rat['name'];?>">view</a></td>
							</tr>
							</table>
							<?php
		}
	}
	else
	{
		?>
		<script>windows.alert("choose an option");</script>
		<?php
	}
}
?>
</body>
</html>