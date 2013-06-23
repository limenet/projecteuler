<?php
$numbers = array(1,3,5,3,7,3,1,1,5);
$numberCounts = array();
foreach ($numbers as $key => $number) {
	if(isset($numberCounts[$number])){
		$numberCounts[$number]++;
	}else{
		$numberCounts[$number] = 1;
	}
}
$chunks = array();//only for optical reasons
foreach ($numbers as $key => $number) {
	$chunks[$number] = $number.' ('.$numberCounts[$number].')';
}
echo implode(' ', $chunks);
?>