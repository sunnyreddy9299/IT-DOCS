<?php
ini_set('display_startup_errors',1);  
ini_set('display_errors',1)
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h3><a href="features.php">Features</a></h3>
<p>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
Notice:<input type="file" name="file" id="file"> <br></br>
Type:<input type="text" name="Type" value="Type"><br></br>
name:<input type="text" name="name" id="name"/><br></br>
<input type="submit" value="upload file" name="submit"><br></br>
</form>
</p>
<?php
$dbserver='localhost';
$dbuser='root';
$dbpassword='';
$db='itdocs';
$link= mysqli_connect($dbserver,$dbuser,$dbpassword,$db);
if(!$link)
{
	die("could not connect:" .mysqli_connect_error());
}
if(empty($_POST['name']) && empty($_POST['type']))
{
	?>
	<script>window.alert("Please enter type and name of notice ..");</script>
	<?php
}
	else
	{
		$filename=$_FILES['file']['name'];
		$filetype=$_FILES['file']['type'];
		$name=$_POST['name'];
		$type=$_POST['Type'];
		$im=addslashes($_FILES["file"]["tmp_name"]);
		$ima=addslashes($_FILES["file"]["name"]);
		$date=date("Y.m.d");
		$in=file_get_contents($im);
		$in=base64_encode($in);
		$a=mysqli_query($link,"INSERT INTO notice(name,Type,content,date,filename,filetype) VALUES('$name','$type','$in','$date','$filename','$filetype')");
		if($a)
		{
			echo"data entered";
		}
	}
?>
</body>
</html>