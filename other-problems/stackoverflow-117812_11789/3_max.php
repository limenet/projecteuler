<?php
$numbers = array(1,-121,2,3,444,1,3,54,6,3,5,33,5,56,4,60,34);
echo max($numbers);//cheap
echo PHP_EOL;
$max = 0;
foreach ($numbers as $key => $number) {
	if($number > $max){
		$max = $number;
	}else{
		unset($numbers[$key]);
	}
}
echo $max;
?>