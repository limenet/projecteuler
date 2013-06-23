<?php
$string = "Montana";
echo strrev($string);//cheap
echo PHP_EOL;
$length = strlen($string);
for ($i=$length; $i >= 0; $i--) {
	echo substr($string, $i, 1);	
}
?>