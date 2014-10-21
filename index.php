<html>


<?php


// get local ip is now a redundant function

function getLocalIp()
{ return gethostbyname(trim(`hostname`)); }
$localip=getLocalIp();


//gets ip from form once submitted
$getsubnet = htmlspecialchars($_GET["subnet"]);
if ($getsubnet == "") {unset ($getsubnet);}
if (isset($getsubnet)) {$ipaddress=$getsubnet;} else {$ipaddress="192.168.0.1";} 

// Splits the ip to get the parts and builds a class c subnet.
$ipparts = explode(".",$ipaddress);
$ippart1 = $ipparts['0'];
$ippart2 = $ipparts['1'];
$ippart3 = $ipparts['2'];
$ippart4 = $ipparts['3'];
$ipsubnet = $ippart1.".".$ippart2.".".$ippart3 ; 

// gets the min host value from url
$getmin = htmlspecialchars($_GET["min"]);
if ($getmin == "") {unset ($getmin);}
if (isset($getmin)) {$miniphost=$getmin;} else {$miniphost = 1 ;} 

// gets the max host from url
$getmax = htmlspecialchars($_GET["max"]);
if ($getmax == "") {unset ($getmax);}
if (isset($getmax)) {$maxiphost=$getmax;} else {$maxiphost = 255 ;} 

// gets the refresh rate from url
$getrefresh = htmlspecialchars($_GET["refresh"]);
if ($getrefresh == "") {unset ($getrefresh);}
if (isset($getrefresh)) {$refresh=$getrefresh;} else {$refresh = 45 ;} 

?>

<head>
<meta http-equiv="refresh" content="<?php echo $refresh; ?>">
</head>
<body>
<div align=center width="700">
<a href="/display.php"> Go to Display Only </a> <br />
<form method=get>
Select Subnet to Scan:<input type="text" maxlength="15" name="subnet" value="<?php echo $ipaddress; ?>"> <br /> 
Select Min Host IP to Scan:<input type="number" min="1" max="255" maxlength="3" size="3" name="min" value="<?php echo $miniphost; ?>">  <br />
Select Max Host IP to Scan:<input type="number" min="1" max="255" maxlength="3" size="3" name="max" value="<?php echo $maxiphost; ?>">  <br />
Set Re-Scan frequency in seconds:<input type="text" size="3" name="refresh" value="<?php echo $refresh; ?>"> <br />
<input type="submit" value="submit">
</form>
<br />

<?php

echo "Searching the following Range ".$ipsubnet.".".$miniphost."-".$ipsubnet.".".$maxiphost ;
echo "<br />";
echo "<br />";
$iphost=$miniphost;
while ($iphost <= $maxiphost) { 
$urladdress = $ipsubnet.".".$iphost ;
echo "<a href=\"/control.php?ip=".$urladdress."\"><img src=\"http://".$urladdress."/screen.bmp\" border=1 /></a> ";
$iphost = $iphost+1; 
}
echo "<br />";
echo "<br />";
?>
</div>
<footer>
<div align=center width="700">
<font size="1"> Designed and Created by <a href="http://www.ashleyunwin.com">AshleyUnwin.com</font></a>
</div>
</footer>
</body>
</html> 