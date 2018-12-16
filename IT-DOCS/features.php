<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form  action='features.php' method='post'>
<h1><a href="admin.php">admin logout</a></h1>
<p>
<select  onchange="redirect(this.value)">
<option>select option</option>
<option value="Addmembers.php" label="Addmembers">Addmembers </option>
<option value="Removemembers.php"label="Removemembers">Removemembers </option>
<option value="AddNotices.php" label="AddNotices">AddNotices </option>
<option value="RemoveNotices.php" label="RemoveNotices">RemoveNotices</option>
</select>
<input type="submit" value="submit"/>
</p>
<script>
function redirect(src)
{
	window.location=src;
}
</script>
</form>
</body>
</html>
