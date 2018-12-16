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
if($_GET['name'])
{
	$m=$_GET['name'];
	$ac="SELECT * FROM notice WHERE name='$m'";
			$q=mysqli_query($link,$ac);
			if($q)
			{
				foreach($q as $ran)
				{
					$t=$ran['content'];
					$t=base64_decode($t);
					$r=$ran['name'];
					$j=$ran['filetype'];
					$o=$ran['filename'];
					$n=filesize($o);
					header('Content-Type: '.$j);
					header('range-accept:bytes');
					header('Content-Disposition:attachment; filename="'.$o.'"');
					echo $t;
					}
			}
}
?>