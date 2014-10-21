<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Snom Provisioning</title>
</head>

<body>


<p>Tetrabyte Snom Provisioning</p>
<form id="phoneprovision" name="phoneprovision" method="post" action="create.php">
<p>Type: <input name="type" type="text" id="type" value="720" size="50"/></p>
<p>MAC: <input name="mac" type="text" id="mac" value="11111111" size="50" /></p>

<?php
$xml=simplexml_load_file("test720.xml");

echo "<br><br>";

echo $xml->getName() . "<br><br>";

foreach($xml->children() as $child) {
  echo '<br>'.$child->getName() . ": " . $child . "<br><br>";
  
  foreach($child->children() as $child2) {
	  echo $child2->getName().': <input name="'.$child2->getName().'" type="text" id="'.$child2->getName().'" value="'.$child2.'" size="100"/></br>';
	  
	  foreach($child2->children() as $child3) {
	  echo '3=>'.$child3->getName().': <input name="'.$child3->getName().'" type="text" id="'.$child3->getName().'" value="'.$child3.'" size="100"/></br>';
	  }
	  
  }
}
?> 

  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
  
</form>
</body>
</html>