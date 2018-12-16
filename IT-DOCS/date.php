<?php
$month=$_POST['month'];
$dt=$_POST['dt'];
$year=$_POST['year'];
$date_value=date("$year-$month-$dt");
echo $date_value;
?>