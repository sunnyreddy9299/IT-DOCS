<?php
ini_set('display_startup_errors',1);  
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<h1><a href="guest.php">Guest logout</a></h1>
<p>
 <form action="hello.php" method="post">
 search by type:
 <select name="H">
<option>select option</option>
 <option value="Holiday" id="Holiday">Holiday</option>
 <option value="Event" id="Event">Event</option>
 <option value="Seminars" id="Seminars">Seminars</option>
</select>
<input type="submit" value="search">
 </form>
</p>
search by date :
<form method="post" name=f1 action="test.php"><input type=hidden name=todo value=submit>
<table border="0" cellspacing="0" >
<tr><td  align=left  >   
<select name=month value=''>Select Month</option>
<option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>
</td><td  align=left  >   
Date<select name=dt >
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>
</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>
<input type="submit" value="fix">
</table>
</form>
</body>
</html>