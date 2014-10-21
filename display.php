<!--
==========================================================================
SnomControl - A General purpose web control system for Snom VoIP Phones
Copyright (C) 2014 Ashley Unwin

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
==========================================================================
-->


<html>

<?php

// Gets IP CSV and sets as an array
$getipcsv = htmlspecialchars($_GET["ipcsv"]);
if ($getipcsv == "") {unset ($getipcsv);}
if (isset($getipcsv)) {$ipcsv = $getipcsv; } else {$end = 1 ;} 
$iplist = explode(",",$ipcsv);


// gets the refresh rate from url
$getrefresh = htmlspecialchars($_GET["refresh"]);
if ($getrefresh == "") {unset ($getrefresh);}
if (isset($getrefresh)) {$refresh=$getrefresh;} else {$refresh = 600 ;} 


// gets the hide variable from url
$gethide = htmlspecialchars($_GET["hide"]);
if ($gethide == "") {unset ($gethide);}
if (isset($gethide)) {$hide=$gethide;} 


echo '

<head>
<meta http-equiv="refresh" content="'.$refresh.'">
</head>
<body>
<div align=center width="700"> ';
if ($hide!="1") 
     {echo '
<a href="/index.php">Return to Main Menu</a> <br />
<form method=get>
Select IP\'s to Display: <br />
Separate each value with commas - Do not use Spaces or New Lines <br /> 
<textarea rows="1" cols="100" name="ipcsv">'.$ipcsv.'</textarea> <br />
Set Re-Scan frequency in seconds:<input type="text" size="3" name="refresh" value="'.$refresh.'">      Hide the input boxes on the next screen: <input type="checkbox" name="hide" value="1"> <br />
<input type="submit" value="submit">
</form>
     ' ; }


foreach ($iplist as $value){
$value = str_replace(' ', '', $value);
// echo $value."   " ;
if ($value == "") {unset ($value);}
if (isset($value)) { echo "<img src=\"http://".$value."/screen.bmp\" border=1 />   "; }
}
?>

</div>


</body>
</html> 