<?php
$numbers = array(1,3,5,3,7,3,1,1,5);
echo implode(' ', array_unique($numbers));//cheap
echo PHP_EOL;
$uniqueNumbers = array();
foreach ($numbers as $key => $number) {
	$uniqueNumbers[$number] = $number;//no if clause necessary!
}
echo implode(' ', $uniqueNumbers);
?>