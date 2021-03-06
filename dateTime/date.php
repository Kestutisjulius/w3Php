<?php
echo '<pre>';
?>
<h2>Syntax: date(format,timestamp)</h2>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo '<br>';
?>
&copy; 2010-<?php echo date("Y");?>
<h2>Get a Time</h2>
<?php
echo "The time is " . date("h:i:sa");
?>
<h2>Get Your Time Zone</h2>
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
<h2>Create a Date With mktime() /SYNTAX: mktime(hour, minute, second, month, day, year)</h2>
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<h2>Create a Date From a String With strtotime() /SYNTAX: strtotime(time, now)</h2>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<br>
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>
<br>
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>