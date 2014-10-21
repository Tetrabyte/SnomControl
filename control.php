<html>
<head>
<script type="text/javascript"><!--
// set your interval in milliseconds
var reloadInterval = 3000;
// this will run when the document is fully loaded
function init() {
setTimeout('reload()',reloadInterval);
}
// this reloads the iframe, and triggers the next reload interval
function reload() {
var iframe = document.getElementById('screen1');
if (!iframe) return false;
iframe.src = iframe.src;
setTimeout('reload()',reloadInterval);
}

// load the init() function when the page is fully loaded
window.onload = init;
--></script>
</head>
<body>





<?php
$getipaddress = htmlspecialchars($_GET["ip"]);
echo '
<div align=center width="700">
<a href="/index.php?subnet='.$getipaddress.'">MAIN MENU</a> <br />
<a href="http://'.$getipaddress.'/">Phone Web Interface</a> <br /> 
';

echo "The Current Phone I.P. Address is ".$getipaddress;
?>
<br />

<form method=get>
<input type="text" name="ip" value="<?php echo $getipaddress; ?>">
<input type="submit" value="submit">
</form>


<iframe name="screen1" id="screen1" src="http://<?php echo $getipaddress; ?>/screen.bmp" height=260 width=340 /></iframe>

</div>

<br />

<div align=center width="700">

<a href="http://<?php echo $getipaddress; ?>/command.htm?key=OFFHOOK" target="my_iframeB">OFFHOOK</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=ONHOOK" target="my_iframeB">ONHOOK</a>
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=RIGHT" target="my_iframeB">RIGHT</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=LEFT" target="my_iframeB">LEFT</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=UP" target="my_iframeB">UP</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=DOWN" target="my_iframeB">DOWN</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=CANCEL" target="my_iframeB">CANCEL</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=ENTER" target="my_iframeB">ENTER</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=VOLUME_UP" target="my_iframeB">VOLUME_UP</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=VOLUME_DOWN" target="my_iframeB">VOLUME_DOWN</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=MENU" target="my_iframeB">MENU</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=REDIAL" target="my_iframeB">REDIAL</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=DND" target="my_iframeB">DND</a> /
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=REC" target="my_iframeB">RECORD</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=TRANSFER" target="my_iframeB">TRANSFER</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=F_HOLD" target="my_iframeB">HOLD</a>
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=SPEAKER" target="my_iframeB">SPEAKER</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=HEADSET" target="my_iframeB">HEADSET</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=F1" target="my_iframeB">F1</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=F2" target="my_iframeB">F2</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=F3" target="my_iframeB">F3</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=F4" target="my_iframeB">F4</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=1" target="my_iframeB">1</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=2" target="my_iframeB">2</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=3" target="my_iframeB">3</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=4" target="my_iframeB">4</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=5" target="my_iframeB">5</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=6" target="my_iframeB">6</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=7" target="my_iframeB">7</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=8" target="my_iframeB">8</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=9" target="my_iframeB">9</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=0" target="my_iframeB">0</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=%23" target="my_iframeB">#</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=%2A" target="my_iframeB">*</a> 
<br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P1" target="my_iframeB">P1</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P2" target="my_iframeB">P2</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P3" target="my_iframeB">P3</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P4" target="my_iframeB">P4</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P5" target="my_iframeB">P5</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P6" target="my_iframeB">P6</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P7" target="my_iframeB">P7</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P8" target="my_iframeB">P8</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P9" target="my_iframeB">P9</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P10" target="my_iframeB">P10</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P11" target="my_iframeB">P11</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P12" target="my_iframeB">P12</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P13" target="my_iframeB">P13</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P14" target="my_iframeB">P14</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P15" target="my_iframeB">P15</a>  / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key=P16" target="my_iframeB">P16</a> 
<br />

<a href="http://<?php echo $getipaddress; ?>/advanced_update.htm?reboot=Reboot" target="my_iframeB">Reboot Phone</a> <br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?RELEASE_ALL_CALLS" target="my_iframeB">End all ongoing calls</a> <br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFALL" target="my_iframeB">Logoff all identities</a> <br />
<a href="http://<?php echo $getipaddress; ?>/command.htm?REREGISTER=1" target="my_iframeB">Re-register identity 1</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?REREGISTER=2" target="my_iframeB">2</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?REREGISTER=3" target="my_iframeB">3</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?REREGISTER=4" target="my_iframeB">4</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?REREGISTER=5" target="my_iframeB">5</a> <br />

<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFLINE=1" target="my_iframeB">Logoff Line 1</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFLINE=2" target="my_iframeB">2</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFLINE=3" target="my_iframeB">3</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFLINE=4" target="my_iframeB">4</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?LOGOFFLINE=5" target="my_iframeB">5</a> <br />

<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=1" target="my_iframeB">Remote DTMF Tone 1</a>
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=2" target="my_iframeB">2</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=3" target="my_iframeB">3</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=4" target="my_iframeB">4</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=5" target="my_iframeB">5</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=6" target="my_iframeB">6</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=7" target="my_iframeB">7</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=8" target="my_iframeB">8</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=9" target="my_iframeB">9</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=0" target="my_iframeB">0</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=%2A" target="my_iframeB">*</a> / 
<a href="http://<?php echo $getipaddress; ?>/command.htm?key_dtmf=%23" target="my_iframeB">#</a> <br />

<a href="http://<?php echo $getipaddress; ?>/index.htm?dialeddel=0" target="my_iframeB">Delete all Dialled Numbers</a> <br />
<a href="http://<?php echo $getipaddress; ?>/index.htm?misseddel=0" target="my_iframeB">Delete all Missed Calls</a> <br />
<a href="http://<?php echo $getipaddress; ?>/index.htm?receiveddel=0" target="my_iframeB">Delete all Received Calls</a> <br />
<br />
</div>


<div align=center>
<iframe name="fkeys" id="fkeys" src="http://<?php echo $getipaddress; ?>/fkey.htm" height=1120 width=1000 /></iframe>
</div>

<div>
<br />
<pre>
<p>There are also other functions which can be controlled remotely (desktop phones only): </p>
<b>Remote Dialing:</b>
http://<?php echo $getipaddress; ?>/command.htm?number=NUMBER&outgoing_uri=URI
<b>Remote Ringtone Playing</b>: 
http://<?php echo $getipaddress; ?>/line_login.htm?PLAY_RINGER:X=+Ringer(X=1..9)
<b>Remote Reset:</b>
http://<?php echo $getipaddress; ?>/advanced_update.htm?reset=Reset
<b>Remote Firmware Upgrade:</b>
https://<?php echo $getipaddress; ?>/dummy.htm?swload=load&firmware=firmwareURL
<b>Fix the line-info-layer for screen.bmp (820/21):</b>
http://<?php echo $getipaddress; ?>/command.htm?FIX_LIL=true
</pre>
<br />
</div>








<iframe name="my_iframeB" height=1 width=1 border=0 /></iframe>

</body>
</html> 