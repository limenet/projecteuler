<?php
$string = "bob likes dogs";
$words = explode(' ', $string);
echo implode(' ', array_reverse($words));//cheap
echo PHP_EOL;
for ($i=count($words)-1; $i >= 0; $i--) {
	echo $words[$i];
	echo $i !== 0 ? ' ' : '';
}
?>